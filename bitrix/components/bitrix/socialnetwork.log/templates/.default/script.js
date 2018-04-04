BX.CLBlock = function(arParams) 
{
	this.arData = new Array();
	this.arData["Subscription"] = new Array();
	this.arData["Transport"] = new Array();	
	this.arData["Visible"] = new Array();
	this.UTPopup = null;
	this.aUnSubscribeTransport = false;

	this.entity_type = null;
	this.entity_id = null;
	this.event_id = null;
	this.event_id_fullset = false;
	this.cb_id = null;
	this.t_val = null;
	this.v_val = null;
	this.ind = null;
	this.type = null;
}

BX.CLBlock.prototype.DataParser = function(str)
{
	str = str.replace(/^\s+|\s+$/g, '');
	while (str.length > 0 && str.charCodeAt(0) == 65279)
		str = str.substring(1);

	if (str.length <= 0)
		return false;
	
	if (str.substring(0, 1) != '{' && str.substring(0, 1) != '[' && str.substring(0, 1) != '*')
		str = '"*"';
		
	eval("arData = " + str);

	return arData;
}

BX.CLBlock.prototype.ShowContentTransport = function()
{
	node_code = this.entity_type + '_' + this.entity_id + '_' + this.event_id + '_' + this.ind;

	if (this.arData["Subscription"][node_code].length <= 0)
		return BX.create('DIV', {
				props: {},
				html: BX.message('sonetLNoSubscriptions')
			});

	var div = BX.create('DIV', {	
		props: {
			'className': 'popup-window-content-transport-div'
		}
	} );

	div.appendChild(BX.create('div', {
		props: {
			'className': 'popup-window-content-transport-div-title'
		},
		html: BX.message('sonetLTransportTitle')
	}));	
	var table = div.appendChild(BX.create('table', {
		props: {
			'width': '100%'
		}
	}));

	var tbody = table.appendChild(BX.create('tbody', {}));	
	
	if (
		typeof this.arData["Subscription"][node_code]["EVENT"] != 'undefined'
		&& typeof this.arData["Subscription"][node_code]["EVENT"]["TITLE_1"] != 'undefined'
	)
		this.ShowContentTransportRow(tbody, this.arData, node_code, "EVENT");
		
	if (
		typeof this.arData["Subscription"][node_code]["ALL"] != 'undefined'
		&& typeof this.arData["Subscription"][node_code]["ALL"]["TITLE_1"] != 'undefined'
	)
		this.ShowContentTransportRow(tbody, this.arData, node_code, "ALL");

	if (
		typeof this.arData["Subscription"][node_code]["CB_ALL"] != 'undefined'
		&& typeof this.arData["Subscription"][node_code]["CB_ALL"]["TITLE_1"] != 'undefined'
	)
		this.ShowContentTransportRow(tbody, this.arData, node_code, "CB_ALL");

	return div;
}

BX.CLBlock.prototype.ShowContentTransportRow = function(tbody_ob, arData, node_code, type)
{
	var tr = false;
	var transport_hidden = false;
	var transport_div = false;
	var select = false;
	var is_selected = false;
	var transport_class = false;	

	tbody_ob.appendChild(BX.create('tr', {
		props: {},
		children: [
			BX.create('td', {
				attrs: {
					'colspan': '2'
				},
				children: [
					BX.create('div', {
						props: {
							'className': 'popup-window-hr'
						},
						children: [
							BX.create('i', {})
						]
					})
				]
			})
		]
	}));

	tr = tbody_ob.appendChild(BX.create('tr', {
		props: {},
		children: [
			BX.create('td', {
				props: {
					'className': 'popup-window-content-transport-cell-title'
				}
			}),
			BX.create('td', {
				props: {
					'className': 'popup-window-content-transport-cell-control'
				}
			})
		]
	}));

	tr.firstChild.appendChild(BX.create('div', {
			props: {},
			html: arData["Subscription"][node_code][type]["TITLE_1"]
		}));


	transport_hidden = tr.firstChild.nextSibling.appendChild(BX.create('INPUT', {
			props: {
				'name': 't_lr_' + node_code + '_' + type,
				'id': 't_lr_' + node_code + '_' + type,
				'bx-type': type
			},
			attrs: {
				'type': 'hidden'
			}
		}));
		
	transport_div = tr.firstChild.nextSibling.appendChild(BX.create('DIV', {
			props: {
				'className': 'transport-popup-list-list'
			}
		}));
		
		
/*		
	select = tr.firstChild.nextSibling.appendChild(BX.create('select', {
			props: {
				'name': 't_lr_' + node_code
			}
		}));
*/

	// inherited
	if (
		arData["Subscription"][node_code][type]["TRANSPORT_INHERITED"]
		&& arData["Subscription"][node_code][type]["TRANSPORT"] != "N"
	)
	{
		for (var i = 0; i < arData["Transport"].length; i++)
		{
			if (arData["Transport"][i]["Key"] == arData["Subscription"][node_code][type]["TRANSPORT"])
			{
				InheritedName = arData["Transport"][i]["Value"];
				break;
			}
		}

		transport_div.appendChild(BX.create('span', {
				props: {
//					'value': 'I',
					'className': 'transport-popup-list-item transport-popup-list-item-selected',
					'bx-option-value': 'I',
					'bx-hidden-id': 't_lr_' + node_code + '_' + type,
					'id': 't_lr_' + node_code + '_' + type + '_I'
//					'selected': true,
//					'defaultSelected': true
				},
				children: [
					BX.create('span', {
						props: {
							'className': 'transport-popup-list-item-left'
						}
					}),
					BX.create('span', {
						props: {
							'className': 'transport-popup-list-item-icon transport-popup-icon-' + arData["Subscription"][node_code][type]["TRANSPORT"]
						}
					}),
					BX.create('span', {
						props: {
							'className': 'transport-popup-list-item-text'
						},
						html: BX.message('sonetLInherited') + ' (' + InheritedName + ')'
					}),
					BX.create('span', {
						props: {
							'className': 'transport-popup-list-item-right'
						}
					})
				],
				'events': {
					'click': BX.delegate(this.OnTransportClick, this)
				}				
		}));
		
		this.SetTransportHidden('t_lr_' + node_code + '_' + type, 'I');
	}

	// all transports
	for (var i = 0; i < arData["Transport"].length; i++)
	{
		if (
			arData["Subscription"][node_code][type]["TRANSPORT"] == arData["Transport"][i]["Key"]
			&& 
			(
				!arData["Subscription"][node_code][type]["TRANSPORT_INHERITED"]
				|| arData["Subscription"][node_code][type]["TRANSPORT"] == "N"
			)
		)
		{
			is_selected = true;
			transport_class = 'transport-popup-list-item transport-popup-list-item-selected';
			this.SetTransportHidden('t_lr_' + node_code + '_' + type, arData["Transport"][i]["Key"]);
		}
		else
		{
			is_selected = false;
			transport_class = 'transport-popup-list-item';
		}

			
		transport_div.appendChild(BX.create('span', {
				props: {
//					'value': arData["Transport"][i]["Key"],
					'className': transport_class,
					'bx-option-value': arData["Transport"][i]["Key"],
					'bx-hidden-id': 't_lr_' + node_code + '_' + type,
					'id': 't_lr_' + node_code + '_' + type + '_' + arData["Transport"][i]["Key"]					
//					'selected': true,
//					'defaultSelected': true
				},
				children: [
					BX.create('span', {
						props: {
							'className': 'transport-popup-list-item-left'
						}
					}),
					BX.create('span', {
						props: {
							'className': 'transport-popup-list-item-icon transport-popup-icon-' + arData["Transport"][i]["Key"]
						}
					}),
					BX.create('span', {
						props: {
							'className': 'transport-popup-list-item-text'
						},
						html: arData["Transport"][i]["Value"]
					}),
					BX.create('span', {
						props: {
							'className': 'transport-popup-list-item-right'
						}
					})
				],
				'events': {
					'click': BX.delegate(this.OnTransportClick, this)
				}

		}));

	}
}

BX.CLBlock.prototype.OnTransportClick = function()
{
	var ob = BX.proxy_context;
	this.SetTransportHidden(ob["bx-hidden-id"], ob["bx-option-value"]);
	
	var arItems = BX.findChildren(ob.parentNode, {'tag':'span'}, false);
	for (var i = 0; i < arItems.length; i++)
	{
		if (arItems[i].id == ob.id)
			BX.addClass(arItems[i], 'transport-popup-list-item-selected');
		else
			BX.removeClass(arItems[i], 'transport-popup-list-item-selected');
	}
}

BX.CLBlock.prototype.SetTransportHidden = function(hidden_id, val)
{
	if (BX(hidden_id))
		BX.adjust(BX(hidden_id), {
			props : {
				'value' : val
			}
		});
	
//		BX(hidden_id).value = val;
}

BX.CLBlock.prototype.ShowContentVisible = function()
{
	var a = null;
	var div1 = null;	
	var span = null;
	var cnt = 1;
	
	node_code = this.entity_type + '_' + this.entity_id + '_' + this.event_id + '_' + this.ind;

	if (this.arData["Subscription"][node_code].length <= 0)
		return BX.create('DIV', {
				props: {},
				html: BX.message('sonetLNoSubscriptions')
			});

	var div = BX.create('DIV', {	
		props: {
			'id': 'popup-window-content-visible-div',
			'className': 'popup-window-content-visible-div'
		}
	} );

	div.appendChild(BX.create('DIV', {
			props: {
				'className': 'popup-window-content-visible-title'
			},
			html: BX.message('sonetLVisibleTitle_' + this.v_val)
		}));
		
	div.appendChild(BX.create('div', {
			props: {
				'className': 'popup-window-content-visible-sep'				
			},
			children: [
				BX.create('div', {
					props: {
						'className': 'popup-window-hr'
					},
					children: [
						BX.create('i', {})
					]
				})
			]
		}));

	if (
		typeof this.arData["Subscription"][node_code]["EVENT"] != 'undefined'
		&& typeof this.arData["Subscription"][node_code]["EVENT"]["TITLE_2"] != 'undefined'
		&& typeof this.arData["Subscription"][node_code]["EVENT"]["VISIBLE"] != 'undefined'
		&& this.arData["Subscription"][node_code]["EVENT"]["VISIBLE"] == this.v_val
	)
	{
		div1 = div.appendChild(BX.create('DIV', {}));
		
		span = div1.appendChild(BX.create('span', {
			props: {
				'className': 'popup-window-content-visible-row'
			},
			html: cnt + '. '
		}));
		cnt++;
		
		a = span.appendChild(BX.create('a', {
					props: {
						'bx-has-transport' : 'N',
						'bx-type' : 'EVENT',
						'href': 'javascript:void(0)'
					},
					html: this.arData["Subscription"][node_code]["EVENT"]["TITLE_2"]
				}));

		if (
			this.v_val == 'Y'
			&& typeof this.arData["Subscription"][node_code]["EVENT"]["TRANSPORT"] != 'undefined'
			&& this.arData["Subscription"][node_code]["EVENT"]["TRANSPORT"] != 'N'
		)
		{
			BX.adjust(a, {
				props : {
					'bx-has-transport' : 'Y'
				}
			});
		}

		BX.bind(a, "click", BX.delegate(this.Subscribe, this));
		
		div1.appendChild(BX.create('div', {
				props: {
					'className': 'popup-window-content-visible-sep'				
				},
				children: [
					BX.create('div', {
						props: {
							'className': 'popup-window-hr'
						},
						children: [
							BX.create('i', {})
						]
					})
				]
			}));
	}
	
	if (
		typeof this.arData["Subscription"][node_code]["ALL"] != 'undefined'
		&& typeof this.arData["Subscription"][node_code]["ALL"]["TITLE_2"] != 'undefined'
		&& typeof this.arData["Subscription"][node_code]["ALL"]["VISIBLE"] != 'undefined'
		&& this.arData["Subscription"][node_code]["ALL"]["VISIBLE"] == this.v_val
	)
	{
		div1 = div.appendChild(BX.create('DIV', {}));

		span = div1.appendChild(BX.create('span', {
			props: {
				'className': 'popup-window-content-visible-row'
			},
			html: cnt + '. '
		}));
		cnt++;

		a = span.appendChild(BX.create('a', {
					props: {
						'bx-has-transport' : 'N',
						'bx-type' : 'ALL',
						'href': 'javascript:void(0)'
					},
					html: this.arData["Subscription"][node_code]["ALL"]["TITLE_2"]
				}));

	
		if (
			this.v_val == 'Y'
			&& typeof this.arData["Subscription"][node_code]["ALL"]["TRANSPORT"] != 'undefined'
			&& this.arData["Subscription"][node_code]["ALL"]["TRANSPORT"] != 'N'
		)
		{
			BX.adjust(a, {
				props : {
					'bx-has-transport' : 'Y'
				}
			});
		}
		
		div1.appendChild(BX.create('div', {
				props: {
					'className': 'popup-window-content-visible-sep'				
				},
				children: [
					BX.create('div', {
						props: {
							'className': 'popup-window-hr'
						},
						children: [
							BX.create('i', {})
						]
					})
				]
			}));

		BX.bind(a, "click", BX.delegate(this.Subscribe, this));
	}

	if (
		typeof this.arData["Subscription"][node_code]["CB_ALL"] != 'undefined'
		&& typeof this.arData["Subscription"][node_code]["CB_ALL"]["TITLE_2"] != 'undefined'
		&& typeof this.arData["Subscription"][node_code]["CB_ALL"]["VISIBLE"] != 'undefined'
		&& this.arData["Subscription"][node_code]["CB_ALL"]["VISIBLE"] == this.v_val
	)
	{
		div1 = div.appendChild(BX.create('DIV', {}));

		span = div1.appendChild(BX.create('span', {
			props: {
				'className': 'popup-window-content-visible-row'
			},
			html: cnt + '. '
		}));
		cnt++;

		a = span.appendChild(BX.create('a', {
					props: {
						'bx-has-transport' : 'N',
						'bx-type' : 'CB_ALL',
						'href': 'javascript:void(0)'
					},
					html: this.arData["Subscription"][node_code]["CB_ALL"]["TITLE_2"]
				}));

	
		if (
			this.v_val == 'Y'
			&& typeof this.arData["Subscription"][node_code]["CB_ALL"]["TRANSPORT"] != 'undefined'
			&& this.arData["Subscription"][node_code]["CB_ALL"]["TRANSPORT"] != 'N'
		)
		{
			BX.adjust(a, {
				props : {
					'bx-has-transport' : 'Y'
				}
			});
		}

		div1.appendChild(BX.create('div', {
				props: {
					'className': 'popup-window-content-visible-sep'				
				},
				children: [
					BX.create('div', {
						props: {
							'className': 'popup-window-hr'
						},
						children: [
							BX.create('i', {})
						]
					})
				]
			}));

		BX.bind(a, "click", BX.delegate(this.Subscribe, this));
	}

	var lastSep = BX.findChild(div1, {'tag': 'div', 'className': 'popup-window-content-visible-sep'}, false);
	if (lastSep)
		BX.remove(lastSep);

	return div;

}

BX.CLBlock.prototype.Subscribe = function(el)
{
	var ob = BX.proxy_context;
	
	this.type = ob["bx-type"];
	
	if (
		this.v_val == 'Y'
		&& typeof ob["bx-has-transport"] != 'undefined'
		&& ob["bx-has-transport"] == 'Y'
	)
	{
		// create unsubscribe transport popup	
		var YesButton = new BX.PopupWindowButton(
					{
						'text': BX.message('sonetLDialogUT_Y'),
						'className' : 'popup-window-button-accept',
						'id': 'bx_log_ut_popup_submitY'
					}
				);
		var NoButton = new BX.PopupWindowButton(
					{
						'text': BX.message('sonetLDialogUT_N'),
						'className' : 'popup-window-button-decline',
						'id': 'bx_log_ut_popup_submitN'
					}
				);				
		
		if (this.UTPopup == null)
		{
			var popup = new BX.PopupWindow(
						'bx_log_ut_popup', 
						BX('popup-window-content-visible-div'),
						{
							closeIcon : true,
							autoHide: true,
							buttons: [YesButton, NoButton]
						}
					);

			this.UTPopup = popup;
			BX.bind(BX('bx_log_ut_popup_submitY'), "click", BX.delegate(this.onUTSubmit, this));
			BX.bind(BX('bx_log_ut_popup_submitN'), "click", BX.delegate(this.onUTReject, this));
		}
		else
		{
			var popup = this.UTPopup;
			popup.setBindElement(BX('popup-window-content-visible-div'));
		}

		var content = BX.message('sonetLTransportUnsubscribe');
		popup.setContent(content);
		popup.show();
	}
	else
		this.SetVisible();
}

BX.CLBlock.prototype.onVisiblePopupClose = function()
{
	this.UTClose();
}

BX.CLBlock.prototype.onUTSubmit = function()
{
	this.t_newval = 'N';
	this.SetTransport();
	this.SetVisible();
	this.GetTransport();
	this.UTClose();
}

BX.CLBlock.prototype.onUTReject = function()
{
	this.SetVisible();
	this.UTClose();
}

BX.CLBlock.prototype.UTClose = function()
{
	if (this.UTPopup != null)
		this.UTPopup.close();
}


BX.CLBlock.prototype.SetVisible = function()
{
	var arItems = [];
	
	params = 'entity_type=' + this.entity_type + '&entity_id=' + this.entity_id + '&event_id=' + this.event_id + '&cb_id=' + this.cb_id + '&ls=' + this.type + '&visible=' + this.v_newval + '&action=set';

	if (BX.message('sonetLSiteId').length > 0)
		params += '&site=' + BX.message('sonetLSiteId');
		
	sonetLXmlHttpSet.open(
		"get",
		BX.message('sonetLSetPath') + "?" + BX.message('sonetLSessid')
			+ "&" + params
			+ "&r=" + Math.floor(Math.random() * 1000)
	);
	sonetLXmlHttpSet.send(null);

	sonetLXmlHttpSet.onreadystatechange = function()
	{
		if (sonetLXmlHttpSet.readyState == 4 && sonetLXmlHttpSet.status == 200)
		{
			if (sonetLXmlHttpSet.responseText)
			{
				if (sonetEventsErrorDiv != null)
				{
					sonetEventsErrorDiv.style.display = "block";
					sonetEventsErrorDiv.innerHTML = sonetEventXmlHttpSet.responseText;
				}
			}
			else
			{
			}
		}
	}

	items = BX('sonet_log_items');
	if (items)
	{
		if (BX.hasClass(items, 'show-hidden-Y'))
			var bShowHidden = true;
		else
			var bShowHidden = false;
	
		if (this.type == 'ALL')
			arItems = BX.findChildren(items, {'tag':'div', 'class':'sonet-log-item-where-' + this.entity_type + '-' + this.entity_id + '-all'}, true);
		else if (this.type == 'EVENT')
		{
			if (this.event_id_fullset)
				arItems = BX.findChildren(items, {'tag':'div', 'class':'sonet-log-item-where-' + this.entity_type + '-' + this.entity_id + '-' + this.event_id_fullset.replace(/_/g, '-')}, true);
			else
				arItems = BX.findChildren(items, {'tag':'div', 'class':'sonet-log-item-where-' + this.entity_type + '-' + this.entity_id + '-' + this.event_id.replace(/_/g, '-')}, true);

		}
		else if (this.type == 'CB_ALL')
			arItems = BX.findChildren(items, {'tag':'div', 'class':'sonet-log-item-createdby-' + this.cb_id }, true);
	}
	
	for (var i = 0; i < arItems.length; i++)
	{
		if (this.v_newval == 'N')
			BX.addClass(arItems[i], 'sonet-log-item-hidden');
		else
			BX.removeClass(arItems[i], 'sonet-log-item-hidden');

		if (!bShowHidden && this.v_newval == 'N')
			arItems[i].style.display = 'none';

	}

	LBlock.VisiblePopup.close();
}

BX.CLBlock.prototype.SetTransport = function()
{
	params = 'entity_type=' + this.entity_type + '&entity_id=' + this.entity_id + '&event_id=' + this.event_id + '&cb_id=' + this.cb_id + '&ls=' + this.type + '&transport=' + this.t_newval + '&action=set';

	if (BX.message('sonetLSiteId').length > 0)
		params += '&site=' + BX.message('sonetLSiteId');

	var sonetLXmlHttpSet2 = new XMLHttpRequest();

	sonetLXmlHttpSet2.open(
		"get",
		BX.message('sonetLSetPath') + "?" + BX.message('sonetLSessid')
			+ "&" + params
			+ "&r=" + Math.floor(Math.random() * 1000)
	);
	sonetLXmlHttpSet2.send(null);

	sonetLXmlHttpSet2.onreadystatechange = function()
	{
		if (sonetLXmlHttpSet2.readyState == 4 && sonetLXmlHttpSet2.status == 200)
		{
			if (sonetLXmlHttpSet2.responseText)
			{
				if (sonetEventsErrorDiv != null)
				{
					sonetEventsErrorDiv.style.display = "block";
					sonetEventsErrorDiv.innerHTML = sonetEventXmlHttpSet.responseText;
				}
			}
		}
	}
}

BX.CLBlock.prototype.SetTransportFromPopup = function(arObHidden)
{
	var params = 'entity_type=' + this.entity_type + '&entity_id=' + this.entity_id + '&event_id=' + this.event_id + '&cb_id=' + this.cb_id + '&action=set_transport_arr';

	for (var i = 0; i < arObHidden.length; i++)
	{
		var obHidden = arObHidden[i];
		if (
			obHidden.value != ""
			&& obHidden.value != null
		)
		params += '&ls_arr['+obHidden["bx-type"]+']=' + obHidden["value"];

	}

	if (BX.message('sonetLSiteId').length > 0)
		params += '&site=' + BX.message('sonetLSiteId');

	sonetLXmlHttpSet.open(
		"get",
		BX.message('sonetLSetPath') + "?" + BX.message('sonetLSessid')
			+ "&" + params
			+ "&r=" + Math.floor(Math.random() * 1000)
	);
	sonetLXmlHttpSet.send(null);

	sonetLXmlHttpSet.onreadystatechange = function()
	{
		if (sonetLXmlHttpSet.readyState == 4 && sonetLXmlHttpSet.status == 200)
		{
			if (sonetLXmlHttpSet.responseText)
			{
				if (sonetEventsErrorDiv != null)
				{
					sonetEventsErrorDiv.style.display = "block";
					sonetEventsErrorDiv.innerHTML = sonetEventXmlHttpSet.responseText;
				}
			}
		}
	}
}

BX.CLBlock.prototype.GetTransport = function()
{
	params = 'entity_type=' + this.entity_type + '&entity_id=' + this.entity_id + '&event_id=' + this.event_id + '&cb_id=' + this.cb_id + '&action=get_transport';

	var sonetLXmlHttpGet2 = new XMLHttpRequest();

	sonetLXmlHttpGet2.open(
		"get",
		BX.message('sonetLSetPath') + "?" + BX.message('sonetLSessid')
			+ "&" + params
			+ "&r=" + Math.floor(Math.random() * 1000)
	);
	sonetLXmlHttpGet2.send(null);

	sonetLXmlHttpGet2.onreadystatechange = function()
	{
		if (sonetLXmlHttpGet2.readyState == 4 && sonetLXmlHttpGet2.status == 200)
		{
			var data = LBlock.DataParser(sonetLXmlHttpGet2.responseText);

			if (typeof(data) == "object")
			{
				if (data[0] == '*')
					return;

				if (BX('sonet_log_transport_icons_' + LBlock.ind))
				{
					BX.cleanNode('sonet_log_transport_icons_' + LBlock.ind);

					for (var i = 0; i < data.length; i++)
					{
						if (data[i] == 'N')
							continue;
						
						BX('sonet_log_transport_icons_' + LBlock.ind).appendChild(BX.create('a', {
							props: {
								'className': 'sonet-log-transport',
								'href': 'javascript:__logShowTransportDialog("'+LBlock.ind+'", "'+LBlock.entity_type+'", '+LBlock.entity_id+', "'+LBlock.event_id+'", "'+LBlock.event_id_fullset+'", "'+LBlock.cb_id+'")'
							},
							attrs: {
								'title': BX.message('sonetLTransportTitle_' + data[i])
							},
							children: [
								BX.create('span', {
									props: {
										'className': 'sonet-log-transport-label sonet-log-transport-' + data[i]
									}
								})
							]
						}));
					}
				}
				sonetLXmlHttpGet2.abort();
			}
		}
	}
	
}

BX.CLBlock.prototype.onTransportPopupSubmit = function()
{
	var ob = BX.proxy_context;
	var formNode = BX.findParent(ob, {'tag': 'tr', 'className': 'popup-window-content-row'});
	var arItems = BX.findChildren(formNode, {'tag':'input', 'attr': {'type': 'hidden'}}, true);	
	this.SetTransportFromPopup(arItems);
	this.GetTransport();
	this.TransportPopup.destroy();	
}

__logSwitchBody = function(ind)
{
	if (BX('sonet_log_message_full_' + ind))
	{
		if (BX.hasClass(BX('sonet_log_message_full_' + ind), 'sonet-log-message-hide'))
		{
			BX.removeClass(BX('sonet_log_message_full_' + ind), 'sonet-log-message-hide');
			BX.addClass(BX('sonet_log_message_full_' + ind), 'sonet-log-message-show');
			BX.removeClass(BX('sonet_log_message_short_' + ind), 'sonet-log-message-show');
			BX.addClass(BX('sonet_log_message_short_' + ind), 'sonet-log-message-hide');
			BX('sonet_log_message_switch_show_' + ind).style.display = 'none';
			BX('sonet_log_message_switch_hide_' + ind).style.display = 'inline-block';
		}
		else
		{
			BX.removeClass(BX('sonet_log_message_full_' + ind), 'sonet-log-message-show');
			BX.addClass(BX('sonet_log_message_full_' + ind), 'sonet-log-message-hide');
			BX.removeClass(BX('sonet_log_message_short_' + ind), 'sonet-log-message-hide');
			BX.addClass(BX('sonet_log_message_short_' + ind), 'sonet-log-message-show');
			BX('sonet_log_message_switch_show_' + ind).style.display = 'inline-block';
			BX('sonet_log_message_switch_hide_' + ind).style.display = 'none';
		}
	}
}

function __logFilterClick(featureId)
{
	var chkbx = document.getElementById("flt_event_id_"+featureId);
	var chkbx_tmp = false;

	var bIsAllChecked = true;
	
	for(var flt_cnt in arFltFeaturesID)
	{
		chkbx_tmp = document.getElementById("flt_event_id_"+arFltFeaturesID[flt_cnt]);
		if (null != chkbx_tmp)
		{
			if (chkbx_tmp.checked == false)
			{
				bIsAllChecked = false;
				break;
			}
		}
	}

	chkbx_tmp = document.getElementById("flt_event_id_all");	
	if (bIsAllChecked)
		chkbx_tmp.value = "Y";
	else
		chkbx_tmp.value = "";	
}

function __logFilterShow()
{
	if (BX('bx_sl_filter').style.display == 'none')
	{
		BX('bx_sl_filter').style.display = 'block';
		BX('bx_sl_filter_hidden').style.display = 'none';
	}
	else
	{
		BX('bx_sl_filter').style.display = 'none';
		BX('bx_sl_filter_hidden').style.display = 'block';
	}
}


function __logDayShow(id)
{
	for (var i = 0; i < arDays[id].length; i++)
	{
		if (
			BX('sonet_log_day_item_' + arDays[id][i])
			&& BX('sonet_log_day_item_' + arDays[id][i]).style.display == 'none'
		)		
			BX('sonet_log_day_item_' + arDays[id][i]).style.display = 'block';
		else if (BX('sonet_log_day_item_' + arDays[id][i]))
			BX('sonet_log_day_item_' + arDays[id][i]).style.display = 'none';
	}
		
	if (BX('sonet_log_day_arrow_' + id))
	{
		if (BX.hasClass(BX('sonet_log_day_arrow_' + id), 'sonet-log-header-arrow-a'))
		{
			BX.removeClass(BX('sonet_log_day_arrow_' + id), 'sonet-log-header-arrow-a');
			BX.addClass(BX('sonet_log_day_arrow_' + id), 'sonet-log-header-arrow-na');
		}
		else if (BX.hasClass(BX('sonet_log_day_arrow_' + id), 'sonet-log-header-arrow-na'))
		{
			BX.removeClass(BX('sonet_log_day_arrow_' + id), 'sonet-log-header-arrow-na');
			BX.addClass(BX('sonet_log_day_arrow_' + id), 'sonet-log-header-arrow-a');
		}
	}
	
	if (
		BX('sonet_log_day_counter_' + id)
		&& BX('sonet_log_day_counter_' + id).style.display == 'none'
	)
		BX('sonet_log_day_counter_' + id).style.display = 'inline-block';
	else if (
		BX('sonet_log_day_counter_' + id)
	)
		BX('sonet_log_day_counter_' + id).style.display = 'none';

	if (
		BX('sonet_log_date_switch_show_' + id)
		&& BX('sonet_log_date_switch_show_' + id).style.display == 'none'
	)
	{
		BX('sonet_log_date_switch_show_' + id).style.display = 'inline-block';
		BX('sonet_log_date_switch_hide_' + id).style.display = 'none';
	}
	else if (
		BX('sonet_log_date_switch_show_' + id)
	)
	{
		BX('sonet_log_date_switch_show_' + id).style.display = 'none';
		BX('sonet_log_date_switch_hide_' + id).style.display = 'inline-block';
	}
	return;
}

__logItemOver = function(ob)
{
	var visibleDiv = BX.findChild(ob, {'tag': 'div', 'className': 'sonet-log-item-visible'}, true);
	if (visibleDiv)
		BX.addClass(visibleDiv, "sonet-log-item-over");
	ob.BXOVER = true;
}

__logItemOut = function(ob)
{
	if (ob.BXTIMER)
		clearTimeout(ob.BXTIMER);

	ob.BXOVER = false;
	ob.BXTIMER = setTimeout(BX.proxy(__logItemOverChange, ob), 50);
}

__logItemOverChange = function()
{
	if (this.BXOVER)
		return;

	var visibleDiv = BX.findChild(this, {'tag': 'div', 'className': 'sonet-log-item-visible'}, true);
	if (visibleDiv)
		BX.removeClass(visibleDiv, "sonet-log-item-over");
}

__logShowTransportDialog = function(ind, entity_type, entity_id, event_id, event_id_fullset, cb_id)
{

	var submitButton = new BX.PopupWindowButton(
				{
					'text': BX.message('sonetLDialogSubmit'),
					'className' : 'popup-window-button-accept',
					'id': 'bx_log_transport_popup_submit'
				}
			);
			
	var cancelButton = new BX.PopupWindowButtonLink(
				{
					'text': BX.message('sonetLDialogCancel'),
					'className' : 'popup-window-button-link-cancel',
					'id': 'bx_log_transport_popup_cancel'
				}
			);

	var popup = BX.PopupWindowManager.create(
				'bx_log_transport_popup', 
				BX('sonet_log_transport_' + ind),
				{
					closeIcon : true,
					offsetTop: 2,
					autoHide: true,
					buttons: [submitButton, cancelButton]
				}
			);
	
	BX.bind(BX('bx_log_transport_popup_submit'), "click", BX.delegate(LBlock.onTransportPopupSubmit, LBlock));
	BX.bind(BX('bx_log_transport_popup_cancel'), "click", BX.delegate(popup.close, popup));
			
	LBlock.entity_type = entity_type;
	LBlock.entity_id = entity_id;	
	LBlock.event_id = event_id;
	if (event_id_fullset)
		LBlock.event_id_fullset = event_id_fullset;
	LBlock.cb_id = cb_id;
	LBlock.ind = ind;

	LBlock.TransportPopup = popup;

	if (
		entity_type != null 
		&& entity_type != false
		&& entity_id != null 
		&& entity_id != false
		&& event_id != null 
		&& event_id != false			
	)
	{
	
		var params = BX.message('sonetLGetPath') + "?" + BX.message('sonetLSessid')
			+ "&action=get_data"
			+ "&lang=" + BX.util.urlencode(BX.message('sonetLLangId'))
			+ "&site=" + BX.util.urlencode(BX.message('sonetLSiteId'))		
			+ "&et=" + BX.util.urlencode(entity_type)
			+ "&eid=" + BX.util.urlencode(entity_id)
			+ "&evid=" + BX.util.urlencode(event_id)
			+ "&r=" + Math.floor(Math.random() * 1000);

		if (
			cb_id != null 
			&& cb_id != false
		)
			params += "&cb_id=" + BX.util.urlencode(cb_id);
			
		sonetLXmlHttpGet.open(
			"get",
			params
		);
		sonetLXmlHttpGet.send(null);

		sonetLXmlHttpGet.onreadystatechange = function()
		{
			if (sonetLXmlHttpGet.readyState == 4 && sonetLXmlHttpGet.status == 200)
			{
				var data = LBlock.DataParser(sonetLXmlHttpGet.responseText);
				if (typeof(data) == "object")
				{
					if (data[0] == '*')
					{
						if (sonetLErrorDiv != null)
						{
							sonetLErrorDiv.style.display = "block";
							sonetLErrorDiv.innerHTML = sonetLXmlHttpSet.responseText;
						}
						return;
					}
					sonetLXmlHttpGet.abort();
					LBlock.arData["Subscription"][entity_type + '_' + entity_id + '_' + event_id + '_' + ind] = data["Subscription"];
					
					if (
						typeof LBlock.arData["Transport"] == 'undefined'
						|| LBlock.arData["Transport"].length <= 0
					)
						LBlock.arData["Transport"] = data["Transport"];

					if (
						typeof LBlock.arData["Visible"] == 'undefined'
						|| LBlock.arData["Visible"].length <= 0
					)
						LBlock.arData["Visible"] = data["Visible"];

					if (popup.bindElementPos != null)
					{
						popup.setBindElement(BX('sonet_log_transport_' + ind));
						BX.cleanNode(popup.contentContainer);
					}

					var content = LBlock.ShowContentTransport(entity_type, entity_id, event_id, cb_id, ind);
					popup.setContent(content);
					popup.show();
				}
			}
		}
	}

}


__logShowVisibleDialog = function(ind, entity_type, entity_id, event_id, event_id_fullset, cb_id, val)
{

	var popup = BX.PopupWindowManager.create(
				'bx_log_visible_popup', 
				BX('sonet_log_visible_' + ind),
				{
					closeIcon: true,
					autoHide: true,
					offsetLeft: -315,
					offsetTop: -20,
					'events': {
						'onPopupClose': BX.delegate(LBlock.onVisiblePopupClose, LBlock)
					}
				}
			);

	LBlock.entity_type = entity_type;
	LBlock.entity_id = entity_id;	
	LBlock.event_id = event_id;
	if (event_id_fullset)
		LBlock.event_id_fullset = event_id_fullset;
	LBlock.cb_id = cb_id;
	
	if (val == 'Y' && !BX.hasClass(BX('sonet_log_day_item_' + ind), 'sonet-log-item-hidden'))
	{
		LBlock.v_val = 'Y';
		LBlock.v_newval = 'N';
	}
	else if (BX.hasClass(BX('sonet_log_day_item_' + ind), 'sonet-log-item-hidden'))
	{
		LBlock.v_val = 'N';	
		LBlock.v_newval = 'Y';
	}
	else
	{
		LBlock.v_val = 'Y';
		LBlock.v_newval = 'N';
	}

		
	LBlock.ind = ind;

	LBlock.VisiblePopup = popup;

	if (
		entity_type != null 
		&& entity_type != false
		&& entity_id != null 
		&& entity_id != false
		&& event_id != null 
		&& event_id != false			
	)
	{
	
		var params = BX.message('sonetLGetPath') + "?" + BX.message('sonetLSessid')
			+ "&action=get_data"
			+ "&lang=" + BX.util.urlencode(BX.message('sonetLLangId'))
			+ "&site=" + BX.util.urlencode(BX.message('sonetLSiteId'))		
			+ "&et=" + BX.util.urlencode(entity_type)
			+ "&eid=" + BX.util.urlencode(entity_id)
			+ "&evid=" + BX.util.urlencode(event_id)
			+ "&r=" + Math.floor(Math.random() * 1000);

		if (
			cb_id != null 
			&& cb_id != false
		)
			params += "&cb_id=" + BX.util.urlencode(cb_id);
			
		sonetLXmlHttpGet.open(
			"get",
			params
		);
		sonetLXmlHttpGet.send(null);

		sonetLXmlHttpGet.onreadystatechange = function()
		{
			if (sonetLXmlHttpGet.readyState == 4 && sonetLXmlHttpGet.status == 200)
			{
				var data = LBlock.DataParser(sonetLXmlHttpGet.responseText);
				if (typeof(data) == "object")
				{
					if (data[0] == '*')
					{
						if (sonetLErrorDiv != null)
						{
							sonetLErrorDiv.style.display = "block";
							sonetLErrorDiv.innerHTML = sonetLXmlHttpSet.responseText;
						}
						return;
					}
					sonetLXmlHttpGet.abort();
					LBlock.arData["Subscription"][entity_type + '_' + entity_id + '_' + event_id + '_' + ind] = data["Subscription"];
					
					if (
						typeof LBlock.arData["Transport"] == 'undefined'
						|| LBlock.arData["Transport"].length <= 0
					)
						LBlock.arData["Transport"] = data["Transport"];

					if (
						typeof LBlock.arData["Visible"] == 'undefined'
						|| LBlock.arData["Visible"].length <= 0
					)
						LBlock.arData["Visible"] = data["Visible"];

					if (popup.bindElementPos != null)
					{
						popup.setBindElement(BX('sonet_log_visible_' + ind));
						BX.cleanNode(popup.contentContainer);
					}

					var content = LBlock.ShowContentVisible();
					popup.setContent(content);
					popup.show();
				}
			}
		}
	}

}

if (!window.XMLHttpRequest)
{
	var XMLHttpRequest = function()
	{
		try { return new ActiveXObject("MSXML3.XMLHTTP") } catch(e) {}
		try { return new ActiveXObject("MSXML2.XMLHTTP.3.0") } catch(e) {}
		try { return new ActiveXObject("MSXML2.XMLHTTP") } catch(e) {}
		try { return new ActiveXObject("Microsoft.XMLHTTP") } catch(e) {}
	}
}

var sonetLXmlHttpGet = new XMLHttpRequest();
var sonetLXmlHttpSet = new XMLHttpRequest();

var LBlock = new BX.CLBlock();

__logOnDateChange = function(sel)
{
	var bShowFrom=false, bShowTo=false, bShowHellip=false, bShowDays=false, bShowBr=false;

	if(sel.value == 'interval')
		bShowBr = bShowFrom = bShowTo = bShowHellip = true;
	else if(sel.value == 'before')
		bShowTo = true;
	else if(sel.value == 'after' || sel.value == 'exact')
		bShowFrom = true;
	else if(sel.value == 'days')
		bShowDays = true;
	
	BX.findNextSibling(sel, {'tag':'span', 'class':'sonet-log-filter-date-from-span'}).style.display = (bShowFrom? '':'none');
	BX.findNextSibling(sel, {'tag':'span', 'class':'sonet-log-filter-date-to-span'}).style.display = (bShowTo? '':'none');
	BX.findNextSibling(sel, {'tag':'span', 'class':'sonet-log-filter-date-hellip-span'}).style.display = (bShowHellip? '':'none');
	BX.findNextSibling(sel, {'tag':'span', 'class':'sonet-log-filter-date-days-span'}).style.display = (bShowDays? '':'none');
	var span = BX.findNextSibling(sel, {'tag':'span', 'class':'sonet-log-filter-date-br-span'});
	if(span)
		span.style.display = (bShowBr? '':'none');
}

__logDateOver = function(ob)
{
	BX.addClass(ob, "sonet-log-date-over");
	ob.BXDATEOVER = true;
}

__logDateOut = function(ob)
{
	if (ob.BXDATETIMER)
		clearTimeout(ob.BXDATETIMER);

	ob.BXDATEOVER = false;
	ob.BXDATETIMER = setTimeout(BX.proxy(__logDateOverChange, ob), 50);
}

__logDateOverChange = function()
{
	if (this.BXDATEOVER)
		return;
	BX.removeClass(this, "sonet-log-date-over");
}

__logVisibleOver = function(ob)
{
	BX.addClass(ob, "sonet-log-visible-over");
}

__logVisibleOut = function(ob)
{
	BX.removeClass(ob, "sonet-log-visible-over");
}

function WriteMicroblog(val)
{
	if(val)
	{
		document.getElementById('microblog-link').style.display = "none";
		document.getElementById('microblog-link-hide').style.display = "block";
		document.getElementById('microblog-form').style.display = "block";
		document.getElementById('microblog-cont').style.height = "150px";
	}
	else
	{
		document.getElementById('microblog-link').style.display = "block";
		document.getElementById('microblog-link-hide').style.display = "none";
		document.getElementById('microblog-form').style.display = "none";
		document.getElementById('microblog-cont').style.height = "0px";
	}
}