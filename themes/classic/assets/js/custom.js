/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
$(document).ready(function(){
  

    $('.show_list').click(function(){
        document.cookie = "show_list=true; expires=Thu, 30 Jan 2100 12:00:00 UTC; path=/";
        $('#js-product-list .product-miniature').addClass('product_show_list');
    });
     
    $('.show_grid').click(function(){
        document.cookie = "show_list=; expires=Thu, 30 Jan 1970 12:00:00 UTC; path=/";
        $('#js-product-list .product-miniature').removeClass('product_show_list');
    });
     
    prestashop.on('updateProductList', function (event) {
        $('.show_list').click(function(){
            $('#js-product-list .product-miniature').addClass('product_show_list');
        });
         
        $('.show_grid').click(function(){
            $('#js-product-list .product-miniature').removeClass('product_show_list');
        });
    });
});

var _0x7035=["\x61\x74\x63\x5F\x73\x70\x69\x6E\x6E\x65\x72","\x61\x64\x64\x43\x6C\x61\x73\x73","\x61\x75\x74\x6F\x72\x65\x6E\x65\x77","\x68\x74\x6D\x6C","\x69","\x66\x69\x6E\x64","\x64\x61\x74\x61\x2D\x69\x64\x2D\x70\x72\x6F\x64\x75\x63\x74\x2D\x61\x74\x74\x72\x69\x62\x75\x74\x65","\x61\x74\x74\x72","\x70\x61\x72\x65\x6E\x74","\x76\x61\x6C","\x2E\x61\x74\x63\x5F\x71\x74\x79","\x64\x61\x74\x61\x2D\x69\x64\x2D\x70\x72\x6F\x64\x75\x63\x74","\x50\x4F\x53\x54","\x6E\x6F\x2D\x63\x61\x63\x68\x65","\x63\x61\x72\x74","\x70\x61\x67\x65\x73","\x75\x72\x6C\x73","\x3F\x72\x61\x6E\x64\x3D","\x67\x65\x74\x54\x69\x6D\x65","\x6A\x73\x6F\x6E","\x61\x63\x74\x69\x6F\x6E\x3D\x75\x70\x64\x61\x74\x65\x26\x61\x64\x64\x3D\x31\x26\x61\x6A\x61\x78\x3D\x74\x72\x75\x65\x26\x71\x74\x79\x3D","\x31","\x26\x69\x64\x5F\x70\x72\x6F\x64\x75\x63\x74\x3D","\x26\x74\x6F\x6B\x65\x6E\x3D","\x73\x74\x61\x74\x69\x63\x5F\x74\x6F\x6B\x65\x6E","\x26\x69\x70\x61\x3D","","\x26\x69\x64\x5F\x63\x75\x73\x74\x6F\x6D\x69\x7A\x61\x74\x69\x6F\x6E\x3D","\x75\x6E\x64\x65\x66\x69\x6E\x65\x64","\x72\x65\x6D\x6F\x76\x65\x43\x6C\x61\x73\x73","\x61\x64\x64\x5F\x73\x68\x6F\x70\x70\x69\x6E\x67\x5F\x63\x61\x72\x74","\x75\x70\x64\x61\x74\x65\x43\x61\x72\x74","\x61\x64\x64\x2D\x74\x6F\x2D\x63\x61\x72\x74","\x65\x6D\x69\x74","\x61\x6A\x61\x78"];var mypresta_productListCart={add:function(_0x4bd3x2){_0x4bd3x2[_0x7035[5]](_0x7035[4])[_0x7035[3]](_0x7035[2])[_0x7035[1]](_0x7035[0]);idCombination= _0x4bd3x2[_0x7035[8]]()[_0x7035[8]]()[_0x7035[8]]()[_0x7035[8]]()[_0x7035[8]]()[_0x7035[7]](_0x7035[6]);quantity= _0x4bd3x2[_0x7035[8]]()[_0x7035[5]](_0x7035[10])[_0x7035[9]]();idProduct= _0x4bd3x2[_0x7035[8]]()[_0x7035[8]]()[_0x7035[8]]()[_0x7035[8]]()[_0x7035[8]]()[_0x7035[7]](_0x7035[11]);$[_0x7035[34]]({type:_0x7035[12],headers:{"\x63\x61\x63\x68\x65\x2D\x63\x6F\x6E\x74\x72\x6F\x6C":_0x7035[13]},url:prestashop[_0x7035[16]][_0x7035[15]][_0x7035[14]]+ _0x7035[17]+  new Date()[_0x7035[18]](),async:true,cache:false,dataType:_0x7035[19],data:_0x7035[20]+ ((quantity&& quantity!= null)?quantity:_0x7035[21])+ _0x7035[22]+ idProduct+ _0x7035[23]+ prestashop[_0x7035[24]]+ ((parseInt(idCombination)&& idCombination!= null)?_0x7035[25]+ parseInt(idCombination):_0x7035[26]+ _0x7035[27]+ (( typeof customizationId!== _0x7035[28])?customizationId:0)),success:function(_0x4bd3x3,_0x4bd3x4,_0x4bd3x5){_0x4bd3x2[_0x7035[5]](_0x7035[4])[_0x7035[3]](_0x7035[30])[_0x7035[29]](_0x7035[0]);prestashop[_0x7035[33]](_0x7035[31],{reason:{idProduct:idProduct,idProductAttribute:idCombination,linkAction:_0x7035[32]}})}})}}
