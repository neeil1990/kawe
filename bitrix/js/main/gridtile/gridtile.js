;(function ()
{
	'use strict';

	BX.namespace('BX.GridTile');

	BX.GridTile = function (params)
	{
		if (typeof params === "object")
		{
			this.wrapper = params.wrapper;
			this.inner = params.inner;
			this.tileList = params.tileList;
			this.maxTileWidth = params.maxTileWidth || 350;
			this.minTileMultiplier = 3;
			this.maxTitleMultiplier = 6;
			this.tileRatio = params.tileRatio || 1.48;
			this.maxTileHeight = this.maxTileWidth / this.tileRatio;
			this.counter = 0;
		}

		this.init();
	};

	BX.GridTile.prototype.setTileWidth = function ()
	{
		var obj =  this.getTileCalculating();
		var multiplier = this.minTileMultiplier;

		if(obj.width > this.maxTileWidth && multiplier < this.tileList.length)
		{
			while(
			obj.width >= this.maxTileWidth &&
			multiplier <= this.maxTitleMultiplier &&
			this.minTileMultiplier < this.tileList.length
				)
			{
				obj = this.getTileCalculating(multiplier++);
			}
		}

		var width = obj.width <= this.maxTileWidth ? obj.width : this.maxTileWidth;
		var height = obj.height <= this.maxTileHeight ? obj.height : this.maxTileHeight;

		for(var i=0; i < this.tileList.length; i++)
		{
			this.tileList[i].style.width = width + 'px';
			this.tileList[i].style.height = height + 'px';
			this.tileList[i].style.marginLeft = obj.margin + 'px';
			this.tileList[i].style.marginTop = obj.margin + 'px';
		}
		this.inner.style.marginLeft = -obj.margin + 'px';
		this.inner.style.marginTop = '-' + obj.margin + 'px';
	};

	BX.GridTile.prototype.getTileCalculating = function(num)
	{
		var multiplier = this.minTileMultiplier;

		if(num && num > this.minTileMultiplier)
			multiplier = num;

		var wrapper_width = this.wrapper.clientWidth;
		var margin =  (wrapper_width/10) / multiplier * (multiplier-1);
		var width = Math.floor((wrapper_width - margin) / multiplier);
		var height = Math.floor(width/this.tileRatio);
		margin = Math.floor(margin/(multiplier-1));

		return {
			width: width,
			margin: margin,
			height: height
		};
	};

	BX.GridTile.prototype.init = function () {
		var _this = this;
		this.setTileWidth();
		BX.bind(window, 'resize', BX.debounce(_this.setTileWidth, 200, _this));
	}

})();