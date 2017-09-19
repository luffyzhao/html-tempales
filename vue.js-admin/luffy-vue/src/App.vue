<template>
  <div id="app">
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'app'
}
</script>


<style type="text/css">
    /*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */
    html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,footer,header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figcaption,figure,main{display:block}figure{margin:1em 40px}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:inherit}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;font-size:1em}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}audio,video{display:inline-block}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}fieldset{padding:.35em .75em .625em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{display:inline-block;vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details,menu{display:block}summary{display:list-item}canvas{display:inline-block}template{display:none}[hidden]{display:none}
</style>

<style type="text/css">
    #app{
        height: 100%;
        width: 100%;
    }
    body{
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        /* color: #fff; */
    }
    legend{
      color: #48576a;
    }
    fieldset{
      padding: 10px;
      border: 1px solid #bfcbd9;
      /* border-radius: 4px; */
      /* height: 100%; */
      box-sizing: border-box;
    }
    .float-row:after{
      display: table;
      line-height: 0;
      content: "";
    }
    .text-center{
      text-align: center;
    }
    .caret {
      transition: transform 0.25s;
      -o-transition: -o-transform 0.25s;
      -ms-transition: -ms-transform 0.25s;
      -moz-transition: -moz-transform 0.25s;
      -webkit-transition: -webkit-transform 0.25s;
      transform:rotate(0deg);
      -webkit-transform: rotate(0deg);
      -moz-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      -o-transform: rotate(0deg);
      display: inline-block;
      width: 0;
      height: 0;
      margin-left: 2px;
      vertical-align: middle;
      border-top: 4px dashed;
      border-top: 4px solid \9;
      border-right: 4px solid transparent;
      border-left: 4px solid transparent;
  }
  .el-table__body-wrapper::-webkit-scrollbar-track,.el-form::-webkit-scrollbar-track
  {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    height: 6px;
    background-color: #F5F5F5;
  }
  .el-table__body-wrapper::-webkit-scrollbar,.el-form::-webkit-scrollbar
  {
    width: 6px;
    background-color: #F5F5F5;
  }

  .el-table__body-wrapper::-webkit-scrollbar-thumb,.el-form::-webkit-scrollbar-thumb
  {
    background-color: #000000;
  }
  
  @font-face {font-family: "iconfont";
    src: url('./assets/fonts/iconfont.eot?t=1505804923097#IE9'); /* IE9*/
    src: url('./assets/fonts/iconfont.eot?t=1505804923097#iefix') format('embedded-opentype'), /* IE6-IE8 */
    url('data:application/x-font-woff;charset=utf-8;base64,d09GRgABAAAAAAWUAAsAAAAACAgAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABHU1VCAAABCAAAADMAAABCsP6z7U9TLzIAAAE8AAAARAAAAFZXHEg0Y21hcAAAAYAAAABnAAABnM8Pap9nbHlmAAAB6AAAAa0AAAHQwnpA02hlYWQAAAOYAAAALwAAADYO7QqQaGhlYQAAA8gAAAAcAAAAJAfeA4VobXR4AAAD5AAAABAAAAAQD+kAAGxvY2EAAAP0AAAACgAAAAoBXgCqbWF4cAAABAAAAAAfAAAAIAETAF1uYW1lAAAEIAAAAUUAAAJtPlT+fXBvc3QAAAVoAAAAKgAAADvL691ReJxjYGRgYOBikGPQYWB0cfMJYeBgYGGAAJAMY05meiJQDMoDyrGAaQ4gZoOIAgCKIwNPAHicY2Bk/sU4gYGVgYOpk+kMAwNDP4RmfM1gxMjBwMDEwMrMgBUEpLmmMDgwVDzzYG7438AQw9zAsA4ozAiSAwAq+AzkeJxjYGBgZWBgYAZiHSBmYWBgzGBgZACBJKAoI1icmYELLM7CYAbkcwAhE5CueCb0zOP/fxQWCDCCVXCAWcwglYxsDAMGGAfOalTAAyZNoDxQeFdAMdCJz4QgGCT+zAOCGZgA6K0Q2wB4nB2PvW4TURCF77mX3bWDvc7+23fj/fFi35DNrpJdO/zaaVKQhAKRitJVhBBWpBRpsJQGKQUFRYrUCIkXMBJFeh4AXgCFFwCJkoUrj2bO6Jtijg5RCPn3g12zNrHIOtkme+QZIVBT9HTaRSyGOU3hxIrj2ToTiYi1pJezMbyearvFznDgqZrago4AZVzsiJwKjIYT+giF2wU6Pj8y+2sme4+VtgjeVgf0A5wwWWtNsmp/c9cuIqt21jDNjmm+q6mKUqP0VkvHa8+tK/UVtfqotLhzHd6lIRodwZ++aEa+Ob0Yzrp9rw6cn8PyI/3TrsEN2W+4a5kdbbVZa/NmcsfG2c/bbavRHdwQWUxmfU6/M5dwEpBQ5ox1aEYArzTKUTKSY5QT3DNyCCbRoRfVr2gD2IjyP/P5/GWUAmmULRbMlbv6Lfnvzf6rx8gkQpdYfVssCJU+n9lXdkg8khDSLwZCftTRG0jRdJSq68UTQFot71oA9gUPDuwtvjmbz1J/2zq8j6YdMBE41cOTS8YuT5bKpsd8HIksW4/G/vE0zEG38IRdnZ5esaX+B4knUxYAAAB4nGNgZGBgAOIjev+V4/ltvjJwszCAwNVnj6sR9P8gFgZmbyCXg4EJJAoAUfQLpAB4nGNgZGBgbvjfwBDDwgACQJKRARWwAABHCgJtBAAAAAPpAAAEAAAABAAAAAAAAAAAdgCqAOgAAHicY2BkYGBgYQhkYGUAASYg5gJCBob/YD4DABESAXEAeJxlj01OwzAQhV/6B6QSqqhgh+QFYgEo/RGrblhUavdddN+mTpsqiSPHrdQDcB6OwAk4AtyAO/BIJ5s2lsffvHljTwDc4Acejt8t95E9XDI7cg0XuBeuU38QbpBfhJto41W4Rf1N2MczpsJtdGF5g9e4YvaEd2EPHXwI13CNT+E69S/hBvlbuIk7/Aq30PHqwj7mXle4jUcv9sdWL5xeqeVBxaHJIpM5v4KZXu+Sha3S6pxrW8QmU4OgX0lTnWlb3VPs10PnIhVZk6oJqzpJjMqt2erQBRvn8lGvF4kehCblWGP+tsYCjnEFhSUOjDFCGGSIyujoO1Vm9K+xQ8Jee1Y9zed0WxTU/3OFAQL0z1xTurLSeTpPgT1fG1J1dCtuy56UNJFezUkSskJe1rZUQuoBNmVXjhF6XNGJPyhnSP8ACVpuyAAAAHicY2BigAAuBuyAhZGJkZmRhZGVgbGCJTczN5GtMj8vPaOUgQEALVoE5AAA') format('woff'),
    url('./assets/fonts/iconfont.ttf?t=1505804923097') format('truetype'), /* chrome, firefox, opera, Safari, Android, iOS 4.2+*/
    url('./assets/fonts/iconfont.svg?t=1505804923097#iconfont') format('svg'); /* iOS 4.1- */
  }

  [class^="el-icon-my"], [class*=" el-icon-my"] {
    font-family:"iconfont" !important;
    font-size: inherit;
    font-style:normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .el-icon-my-mima:before { content: "\e648"; }

  .el-icon-my-yonghu:before { content: "\e612"; }
</style>