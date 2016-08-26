var ua = navigator.userAgent.toLowerCase(); 
    if (/iphone|ipad|ipod/.test(ua)) {
        var source = ''
        +   '{{each list as value i}}'
        +        '<div><h3>{{i}}</h3>'
        +         '{{each value as v k}}'
        +         '<div class="line n-{{k}}">'
        +             '<div class="content-left"><img src="{{v.dis_webimg}}"></div>'
        +             '<div class="content-center">'
        +               '<p class="strong">{{v.dis_name}}</p>'
        +               '{{if v.is_open_ios == 2 }}'
        +                   '<span class="button">前往</span>'
        +                   '<div class="clear"></div>'
        +                   '<p class="ptm15">{{v.app_status_ios}}</p>'
        +               '{{else}}'
        +                   '<a class="button" href="{{v.dis_url_ios}}">前往</a>'
        +                   '<div class="clear"></div>'
        +                   '<p class="ptm15"><label style="margin-right:0" class="star star{{v.app_stars}}">★★★★★</label><label class="star star_no{{v.app_stars_no}}">☆☆☆☆☆</label><label>{{v.app_downloads}}</label><label>{{v.app_size}}</label></p>'
        +               '{{/if}}'
        +               '<p>{{v.dis_desc}}</p>'
        +             '</div>'
        +             '<div class="clear"></div>'
        +          '</div>'
        +         '{{/each}}</div>'
        +   '{{/each}}'
        +   '<div class="clear"></div>'
        +   '</div>';   
    } else {
        var source = ''
        +   '{{each list as value i}}'
        +        '<div><h3>{{i}}</h3>'
        +         '{{each value as v k}}'
        +         '<div class="line n-{{k}}">'
        +             '<div class="content-left"><img src="{{v.dis_webimg}}"></div>'
        +             '<div class="content-center">'
        +               '<p class="strong">{{v.dis_name}}</p>'
        +               '{{if v.is_open == 2 }}'
        +                   '<span class="button">前往</span>'
        +                   '<div class="clear"></div>'
        +                   '<p class="ptm15">{{v.app_status}}</p>'
        +               '{{else}}'
        +                   '<a class="button" href="{{v.dis_url}}">前往</a>'
        +                   '<div class="clear"></div>'
        +                   '<p class="ptm15"><label style="margin-right:0" class="star star{{v.app_stars}}">★★★★★</label><label class="star star_no{{v.app_stars_no}}">☆☆☆☆☆</label><label>{{v.app_downloads}}</label><label>{{v.app_size}}</label></p>'
        +               '{{/if}}'
        +               '<p>{{v.dis_desc}}</p>'
        +             '</div>'
        +             '<div class="clear"></div>'
        +          '</div>'
        +         '{{/each}}</div>'
        +   '{{/each}}'
        +   '<div class="clear"></div>'
        +   '</div>'; 
    }

var render = template.compile(source);
var html = render({
    list: discover
});
//下面部分
document.getElementById('data').innerHTML = html;

//上面部分
//document.getElementById('title').innerHTML = shareContent.title;
document.getElementById('share').style.backgroundColor = "#"+shareContent.img_color;
document.getElementById('share_img_parent').style.backgroundColor = "#"+shareContent.img_color;
document.getElementById('logo_img').src = shareContent.logo;
document.getElementById('text').innerHTML = shareContent.content;
if( trimStr( shareContent.Android ) != '' ){
    document.getElementById('Android').href = shareContent.Android;
} else {
    document.getElementById('Android_img').src = "./img/Android_no.png";
}
if( trimStr( shareContent.IOS ) != '' ){
    document.getElementById('IOS').href = shareContent.IOS;
} else {
    document.getElementById('IOS_img').src = "./img/ios_no.png";
}

function trimStr( str ){
    return str.replace(/(^\s*)|(\s*$)/g,"");
}

var content_center = document.getElementsByClassName('content-center');
var width = ( document.getElementsByClassName('line')[0].offsetWidth - document.getElementsByClassName('content-left')[0].offsetWidth - 40 ) + "px";
var content_center_length = content_center.length;
for (var i = 0; i < content_center_length; i++) {
    content_center[i].style.width = width;
}

