function selectLanguage(selectedValue) {
    var url = window.location.href;
    var url_clean = url.split('/');
    var language = selectedValue.toLowerCase();
    var param = url_clean[url_clean.length-1].toLowerCase();
    if($.inArray(param,['fr','nl','en']) !== -1 ) {
        url = url.replace(param,language);
    }
    else {
        url = url+'/'+language;
    }
    window.location = url;
}
