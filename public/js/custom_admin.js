//hhmvc js
var rs = {
 
     init: function( settings ) {
        rs.config = {
            $items: $( ".ajaxReq" ),
            aType: "POST", //ajax settings
   			aUrl: "",
   			aCache: false,
   			aDataType: "html",
            newArticleId: '#new-article',
            dbAction: "save"
        };
 		
        $.extend( rs.config, settings );
        rs.setup();
    },

    setup: function() {
        rs.config.$items.each( rs.prepareMarkup ).click( rs.initLinkData );
    },

    prepareMarkup: function(){
    },

    createContainer: function(e) {
    },

    getElementData: function( scope ){
        var obj         = {};
        obj.url_bak     = scope.attr('href');
        obj.url         = scope.data('url'); // url
        obj.id          = scope.data('id');  // id
        obj.tid         = scope.data('tid'); //target
        obj.pid         = scope.data('pid'); //parent
        obj.aid         = scope.data('aid'); //controller 
        obj.status      = scope.data('status'); //online status
        rs.config.PostData  = typeof obj.url_bak === 'undefined' ? rs.config.PostData : obj;
        return rs.config.PostData;
    },

    getElementContentFields: function( scope ){
        var con_obj = new Object();
        $('.codeArea', scope).each(function(){
                var key         = $(this).data('field');
                var value   = $(this).data('value');    
                con_obj[key] = value;
        });
        // console.log(con_obj);
        return con_obj;
    },

    getElementContent: function( scope ){
        str = JSON.stringify(String(scope.html()));
        str = str.substring(1, str.length-1);
        return str;
    },

    initLinkData: function(e){
        e.preventDefault();

        var obj = rs.getElementData($(this));
        var scope   = $('#' + obj.tid);
        rs.config.PostData.id = '#' + obj.tid;
        rs.config.PostData.id_data = '#' + obj.tid +'_data';
        // console.log(rs.config.PostData.id_data);
        rs.config.PostData.Numid = scope.data('id');
        rs.config.PostData.CharId = $(this).attr('id');
        rs.initLink( scope, $(this), rs.config.PostData.aid );
    },
    
    initLink: function( scope, that, task ) {
        rs.config.dbAction = task;
        if(task == 'online' || task == 'save' || task == 'delete' || task == 'deletec'){
            rs.config.dbAction = task;
            rs.initAjax( rs.mergeObj(rs.getElementContentFields( rs.config.PostData.id_data )) );
        }else if(task == 'skip'){
            scope.destroy();
        }else if(task == 'new'){
            rs.initEditor( $( rs.config.newArticleId ) );
        }else{
            rs.initEditor( scope );
        }
    },
 
    initAjax: function( obj, config ) {
 
        if(rs.config.dbAction == "save"){
            obj['Html'] = $('.note-editable', $('#pid_'+rs.config.PostData.id)).html();
            if( obj['Html'].length < 50 ) return false;
        }
        //console.log(obj, config);
        
        $.ajax({
            url: obj.url,
            type: "POST",
            data: obj
        }).done( rs.doneAjax ).fail( rs.failAjax );
    },

    doneAjax: function( data, status, xhr ){
        if(data.callback){
            ( new Function( 'return ' + data.callback ) )();
        }
    },

    failAjax: function( data, status, xhr ){
        
        console.log( data );
        console.log( status );
        console.log( xhr );
        alert(status);
    },

    getJSON: function( data ){
        return JSON.stringify( data );
    },

    initEditor: function( scope ){
        scope.summernote({

            codemirror: { // codemirror options
                theme: 'monokai'
            },
            oninit: function() {
                // console.log('Summernote is entered');
                // alert('init');
            },
            onenter: function() {
                // console.log('Summernote is entered');
            },
            onmouseover: function() {
                // console.log('Summernote is entered');
            },

            onfocus: function() {
                // console.log('Summernote is focused');
                if(rs.config.dbAction == "new"){
                    $scope = $(this);
                    $(this).closest('.note-editor').bind("mouseleave", rs.mouseLeave);
                }                    
            },

        });
    },
    mouseLeave: function(){
        obj2 = rs.getElementContentFields($(rs.config.PostData.id_data));
        obj2['Html'] = $('.note-editable', $('this')).html();
        if(rs.config.dbAction == "new")
        {
            var scope = $('#new-article').next('.note-editor');
            obj2['Html'] = $('.note-editable', scope).html();
        }
        obj = rs.mergeObj(obj2);
        obj.NumId = rs.config.PostData.Numid
        obj.url = rs.config.dbAction == "new" ? "/json/new" : "/json/save";
        console.log('length', obj2['Html'].length, 'content', obj2['Html']);
        if(obj['Html'].length < 50) return false;
        rs.initAjax(obj);
    },
    mergeObj: function(obj){
         return $.extend(rs.config.PostData, obj);   
    }
    // ,
 
    // buildUrl: function() {
    //     return rs.config.urlBase + rs.$currentItem.attr( "id" );
    // },
 
    // showItem: function() {
    //     var rs.$currentItem = $( this );
    //     rs.getContent( rs.showContent );
    // },
 
    // getContent: function( callback ) {
    //     var url = rs.buildUrl();
    //     rs.$currentItem.data( "container" ).load( url, callback );
    // },
 
    // showContent: function() {
    //     rs.$currentItem.data( "container" ).show();
    //     rs.hideContent();
    // },
 
    // hideContent: function() {
    //     rs.$currentItem.siblings().each(function() {
    //         $( this ).data( "container" ).hide();
    //     });
    // }
 
};
 
$( document ).ready( rs.init );
$( document ).ready( function(){

    $('.dropdown-toggle').each(function(){

        $t = $(this).parent('div');
        $dm = $t.next('.dropdown-menu');
        $t.click(function(e){ $('ul', $t).toggle(); alert('1'); });

    });

    $('.active-link a, .active-link button').each(
       function(){
        $(thid).removeClass('hhmvc-active')
        $(this).click(function(){
            $(this).addClass('hhmvc-active');
        })
    });
});