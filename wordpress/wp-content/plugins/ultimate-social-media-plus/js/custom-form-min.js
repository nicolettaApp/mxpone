var checkboxHeight="18";var radioHeight="20.5";var selectWidth="";document.write('<style type="text/css">input.styled { display: none; } select.styled { position: relative; width: '+selectWidth+"px; opacity: 0; filter: alpha(opacity=0); z-index: 5; } .disabled { opacity: 0.5; filter: alpha(opacity=50); }</style>");var Custom={init:function(){var e=document.getElementsByTagName("input"),t=Array(),n,r,i;for(a=0;a<e.length;a++){if((e[a].type=="checkbox"||e[a].type=="radio")&&e[a].className=="styled"){t[a]=document.createElement("span");t[a].className=e[a].type;if(e[a].checked==true){if(e[a].type=="checkbox"){position="0 -"+checkboxHeight*2+"px";t[a].style.backgroundPosition=position}else{position="0 -"+radioHeight*2+"px";t[a].style.backgroundPosition=position}}e[a].parentNode.insertBefore(t[a],e[a]);e[a].onchange=Custom.clear;if(!e[a].getAttribute("disabled")){t[a].onclick=Custom.pushed;t[a].onclick=Custom.check}else{t[a].className=t[a].className+=" disabled"}}}e=document.getElementsByTagName("select");for(a=0;a<e.length;a++){if(e[a].className=="styled"){r=e[a].getElementsByTagName("option");i=r[0].childNodes[0].nodeValue;n=document.createTextNode(i);for(b=0;b<r.length;b++){if(r[b].selected==true){n=document.createTextNode(r[b].childNodes[0].nodeValue)}}t[a]=document.createElement("span");t[a].className="select";t[a].id="select"+e[a].name;t[a].appendChild(n);e[a].parentNode.insertBefore(t[a],e[a]);if(!e[a].getAttribute("disabled")){e[a].onchange=Custom.choose}else{e[a].previousSibling.className=e[a].previousSibling.className+=" disabled"}}}document.onmouseup=Custom.clear},pushed:function(){element=this.nextSibling;if(element.checked==true&&element.type=="checkbox"){this.style.backgroundPosition="0 -"+checkboxHeight*3+"px"}else if(element.checked==true&&element.type=="radio"){this.style.backgroundPosition="0 -"+radioHeight*3+"px"}else if(element.checked!=true&&element.type=="checkbox"){this.style.backgroundPosition="0 -"+checkboxHeight+"px"}else{this.style.backgroundPosition="0 -"+radioHeight+"px"}},check:function(){element=this.nextSibling;if(element.checked==true&&element.type=="checkbox"){this.style.backgroundPosition="0 0";element.checked=false}else{if(element.type=="checkbox"){this.style.backgroundPosition="0 -"+checkboxHeight*2+"px"}else{this.style.backgroundPosition="0 -"+radioHeight*2+"px";group=this.nextSibling.name;inputs=document.getElementsByTagName("input");for(a=0;a<inputs.length;a++){if(inputs[a].name==group&&inputs[a]!=this.nextSibling){inputs[a].previousSibling.style.backgroundPosition="0 0"}}}element.checked=true}},clear:function(){inputs=document.getElementsByTagName("input");for(var e=0;e<inputs.length;e++){if(inputs[e].type=="checkbox"&&inputs[e].checked==true&&inputs[e].className=="styled"){inputs[e].previousSibling.style.backgroundPosition="0 -"+checkboxHeight*2+"px"}else if(inputs[e].type=="checkbox"&&inputs[e].className=="styled"){inputs[e].previousSibling.style.backgroundPosition="0 0"}else if(inputs[e].type=="radio"&&inputs[e].checked==true&&inputs[e].className=="styled"){inputs[e].previousSibling.style.backgroundPosition="0 -"+radioHeight*2+"px"}else if(inputs[e].type=="radio"&&inputs[e].className=="styled"){inputs[e].previousSibling.style.backgroundPosition="0 0"}}},choose:function(){option=this.getElementsByTagName("option");for(d=0;d<option.length;d++){if(option[d].selected==true){document.getElementById("select"+this.name).childNodes[0].nodeValue=option[d].childNodes[0].nodeValue}}}};var prev_onload = window.onload;if('function' === typeof prev_onload){prev_onload(),Custom.init(); }else{Custom.init();}