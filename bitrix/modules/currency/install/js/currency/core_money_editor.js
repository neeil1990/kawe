;(function(){
	'use strict';

	BX.namespace('BX.Currency');

	var currencyList = null;
	function getCurrencyList()
	{
		if(currencyList === null)
		{
			currencyList = BX.message('CURRENCY');
		}

		return currencyList;
	}

	BX.Currency.Editor = function(param)
	{
		this.input = param.input;

		this.callback = param.callback;
		this.currency = param.currency;

		this.value = param.value || '';

		BX.ready(BX.delegate(this.init, this));
	};

	BX.Currency.Editor.prototype.init = function()
	{
		BX.bind(this.input, 'bxchange', BX.proxy(this.valueEdit, this));
		BX.unbind(this.input, 'change', BX.proxy(this.valueEdit, this));
	};

	BX.Currency.Editor.prototype.clean = function()
	{
		BX.unbind(this.input, 'bxchange', BX.proxy(this.valueEdit, this));
		this.input = null;
	};

	BX.Currency.Editor.prototype.valueEdit = function(){
		this.formatValue();
	};

	BX.Currency.Editor.prototype.setCurrency = function(currency)
	{
		this.value = BX.Currency.Editor.getUnFormattedValue(this.input.value, this.currency);

		this.currency = currency;

		this.input.value = BX.Currency.Editor.getFormattedValue(
			this.value,
			this.currency
		);

		this.callValueChangeCallback();
	};

	BX.Currency.Editor.prototype.formatValue = function()
	{
		var cursorPos = BX.getCaretPosition(this.input);
		var originalValue = this.input.value;

		this.changeValue();

		if(this.input.value.length > 0)
		{
			BX.setCaretPosition(this.input, cursorPos - originalValue.length + this.input.value.length);
		}
	};

	BX.Currency.Editor.prototype.changeValue = function()
	{
		this.value = BX.Currency.Editor.getUnFormattedValue(this.input.value, this.currency);

		this.input.value = BX.Currency.Editor.getFormattedValue(
			this.value,
			this.currency
		);

		this.callValueChangeCallback();
	};

	BX.Currency.Editor.prototype.callValueChangeCallback = function()
	{
		if(!!this.callback)
		{
			this.callback.apply(this, [this.value]);
		}

		BX.onCustomEvent(this, 'Currency::Editor::change', [this.value]);
	};

	/**
	 * static section
	 */

	BX.Currency.Editor.getBaseCurrencyId = function()
	{
		var listCurrency = getCurrencyList();
		for(var key in listCurrency)
		{
			if(!listCurrency.hasOwnProperty(key))
			{
				break;
			}

			if(BX.prop.getString(listCurrency[key], 'BASE', 'N') === 'Y')
			{
				return key;
			}
		}
		return '';
	};

	BX.Currency.Editor.trimTrailingZeros = function(formattedValue, currency)
	{
		var listCurrency = getCurrencyList();
		if(typeof listCurrency[currency] === 'undefined')
		{
			return formattedValue;
		}

		var ch = BX.prop.getString(listCurrency[currency], 'DEC_POINT', '');
		return ch !== '' ? formattedValue.replace(new RegExp('\\' + ch + '00'), '') : formattedValue;
	};

	BX.Currency.Editor.getUnFormattedValue = function(formattedValue, currency)
	{
		var listCurrency = getCurrencyList();
		return formattedValue
			.replace(new RegExp('[' + listCurrency[currency]['SEPARATOR'] + ']', 'g'), '')
			.replace(listCurrency[currency]['DEC_POINT'], '.');
	};

	BX.Currency.Editor.getFormattedValue = function(baseValue, currency)
	{
		var valueLength = baseValue.length;
		var formatValue = "";
		var listCurrency = getCurrencyList();

		if(valueLength > 0)
		{
			baseValue = baseValue.replace(/^0+/, '');
			if(baseValue.length <= 0)
			{
				baseValue = '0';
			}
			else if(baseValue.charAt(0) === '.')
			{
				baseValue = '0' + baseValue;
			}

			valueLength = baseValue.length;
		}

		var regExp;
		if(listCurrency[currency]['SEPARATOR'] === ',' || listCurrency[currency]['SEPARATOR'] === '.')
		{
			regExp = new RegExp('[' + listCurrency[currency]['DEC_POINT'] + ']');
		}
		else
		{
			regExp = new RegExp('[' + listCurrency[currency]['DEC_POINT'] + ',.]');
		}

		var decPointPosition = baseValue.match(regExp);

		decPointPosition = decPointPosition === null ? baseValue.length : decPointPosition.index;
		var countDigit = 0;
		for(var i = 0; i < baseValue.length; i++)
		{
			var symbolPosition = baseValue.length - 1 - i;
			var symbol = baseValue.charAt(symbolPosition);
			var isDigit = ('0123456789'.indexOf(symbol) >= 0);
			if(isDigit)
			{
				countDigit++;
			}
			if(symbolPosition === decPointPosition)
			{
				countDigit = 0;
			}

			if(symbolPosition >= decPointPosition)
			{
				if(listCurrency[currency]['DEC_POINT'] === '.' && symbol === ',')
				{
					symbol = listCurrency[currency]['DEC_POINT'];
				}
				if(listCurrency[currency]['DEC_POINT'] === ',' && symbol === '.')
				{
					symbol = listCurrency[currency]['DEC_POINT'];
				}

				if(isDigit || (symbolPosition === decPointPosition && symbol === listCurrency[currency]['DEC_POINT']))
				{
					formatValue = symbol + formatValue;
				}
				else if(valueLength > symbolPosition)
				{
					valueLength--;
				}
			}
			else
			{
				if(isDigit)
				{
					formatValue = symbol + formatValue;
				}
				else if(valueLength > symbolPosition)
				{
					valueLength--;
				}
				if(isDigit && countDigit % 3 === 0 && countDigit !== 0 && symbolPosition !== 0)
				{
					formatValue = listCurrency[currency]['SEPARATOR'] + formatValue;
					if(valueLength >= symbolPosition)
					{
						valueLength++;
					}
				}
			}
		}

		if(listCurrency[currency]['DECIMALS'] > 0)
		{
			decPointPosition = formatValue.match(new RegExp('[' + listCurrency[currency]['DEC_POINT'] + ']'));
			decPointPosition = decPointPosition === null ? formatValue.length : decPointPosition.index;
			while(formatValue.length - 1 - decPointPosition > listCurrency[currency]['DECIMALS'])
			{
				if(valueLength >= formatValue.length - 1)
				{
					valueLength--;
				}
				formatValue = formatValue.substr(0, formatValue.length - 1);
			}
		}
		return formatValue;
	};

})();