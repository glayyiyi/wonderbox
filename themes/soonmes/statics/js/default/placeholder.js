//placeholder
 
var doc = window.document, input = doc.createElement('input'); 
if( typeof input['placeholder'] == 'undefined' ) // 如果不支持placeholder属性 
{ 
$('input').each(function( ele ) 
{ 
var me = $(this); 
var ph = me.attr('placeholder'); 
if( ph && !me.val() ) 
{ 
me.val(ph).css('color', '#aaa').css('line-height', me.css('height')); 
} 
me.on('focus', function() 
{ 
if( me.val() === ph) 
{ 
me.val(null).css('color', ''); 
} 
}).on('blur', function() 
{ 
if( !me.val() ) 
{ 
me.val(ph).css('color', '#aaa').css('line-height', me.css('height')); 
} 
}); 
}); 
} 

//end placeholder