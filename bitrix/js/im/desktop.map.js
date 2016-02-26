{"version":3,"file":"desktop.min.js","sources":["desktop.js"],"names":["window","BX","desktop","params","this","apiReady","clientVersion","disableLogin","autorun","focusTimeout","lastSetIcon","showNotifyId","popupConfirm","htmlWrapperHead","tryCheckConnect","topmostWindow","topmostWindowTimeout","content","contentFullWindow","contentMenu","contentAvatar","contentTab","contentTabContent","currentTab","currentTabTarget","lastTab","lastTabTarget","path","mainUserOptions","pathToAjax","tabItems","tabRedrawTimeout","userInfo","id","name","gender","avatar","profile","syncStatus","syncPauseBlock","width","height","initWidth","initHeight","minWidth","minHeight","timeoutDelayOfLogout","addCustomEvent","delegate","terminate","reason","onCustomEventForTab","TAB_CP","logout","bind","e","keyCode","ctrlKey","metaKey","shiftKey","BXIM","setLocalConfig","console","log","windowReload","openDeveloperTools","openLogsFolder","prototype","init","offsetWidth","style","offsetHeight","create","attrs","document","body","insertBefore","firstChild","ready","enableInVersion","PULL","tryConnectSet","notSupported","setWindowResizable","setWindowMinSize","Width","Height","message","replace","getApiVersion","browser","IsMac","head","type","html","addClass","addTab","title","order","target","events","open","newRevision","oldRevision","closeConfirm","location","reload","error","code","setIconStatus","login","setPrivateVar","updateState","sendErrorCode","textError","userEmail","messenger","connectionStatus","userOptions","setAjaxPath","status","settings","preventShutdown","adjustSize","tabId","changeTab","onCustomEvent","setTimeout","finalizeTrayMenu","onSyncStatusChanged","setWindowSize","setWindowTitle","updateContent","props","className","children","click","checkUpdate","innerHTML","appendChild","getCurrentUrl","protocol","hostname","port","diskReady","callback","success","sessid","bitrix_sessid","loginSuccessCallback","BXDesktopSystem","Login","showLoginForm","Logout","skipCheck","href","getContextWindow","getNetworkAuthorizeStatus","TAB_B24NET","clearTimeout","ajax","url","method","dataType","timeout","data","IM_DESKTOP_LOGOUT","onsuccess","Shutdown","onfailure","openBrowser","ExecuteCommand","NotifyNoUpdates","ShowNotifications","browse","full","GetProperty","join","version","parseInt","eventName","eventHandler","addEventListener","arEventParams","i","detail","push","apply","windowTarget","arguments","length","objEventParams","mainWindow","opener","top","BXWindows","BXDesktopWindow","DispatchCustomEvent","findWindow","tabIdTarget","windowIsFocused","SetIconStatus","setIconBadge","count","important","SetIconBadge","setIconTooltip","iconTitle","enabled","SetProperty","setWindowClosable","flashIcon","voiced","FlashIcon","checkInternetConnection","successCallback","failureCallback","tryCount","tryName","Date","skipAuthCheck","skipBxHeader","getWorkArea","coordinates","GetWorkArea","left","right","bottom","showNotification","notifyId","js","getHtmlPage","innerWidth","innerHeight","Math","max","resize","syncPause","immediate","BXFileStorage","SyncPause","getSyncStatus","windowCommand","command","setActiveWindow","trace","openTopmostWindow","bodyClass","closeTopmostWindow","jsContent","outerHTML","isDomNode","OpenDeveloperTools","OpenLogsFolder","autorunStatus","value","diskAttachStatus","BitrixDisk","clipboardSelected","element","resultText","tagName","selectionStart","selectionEnd","substring","getSelection","toString","range","getRangeAt","cloneContents","div","createElement","util","htmlspecialcharsback","split","clipboardCopy","cut","execCommand","clipboardTextArea","position","opacity","focus","text","textNew","remove","clipboardCut","clipboardPaste","clipboardDelete","clipboardUndo","clipboardRedo","selectAll","getLocalConfig","def","result","QuerySettings","JSON","parse","stringify","StoreSettings","removeLocalConfig","openConfirm","buttons","modal","destroy","PopupWindowButton","popupWindow","close","PreventDefault","PopupWindow","zIndex","autoHide","closeByEsc","overlay","onPopupClose","onPopupDestroy","show","popupContainer","contentContainer","filename","Log","createWindow","GetWindow","getWindowTitle","trim","setWindowPosition","addTrayMenuItem","AddTrayMenuItem","EndTrayMenuItem","PreventShutdown","diskReportStorageNotification","ReportStorageNotification","diskOpenFolder","OpenFolder","addSeparator","drawTabs","hide","badge","initContent","force","drawAppearance","arTabs","objectSort","drawTab","updateTabBadge","data-id","bindDelegate","event","proxy_context","getAttribute","fireEvent","removeClass","closeTab","getCurrentTab","setTabBadge","counter","findChild","SetTabBadge","setTabContent","getCurrentTabTarget","isActiveWindow","IsActiveTab","getActiveWindow","ActiveTab","windowId","SetActiveTabI","SetActiveTab","setUserInfo","onclick","src","MessengerCommon","isBlankAvatar","color","updateUserInfo","getUserInfo"],"mappings":"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"}