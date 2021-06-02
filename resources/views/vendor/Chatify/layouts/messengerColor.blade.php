<style>
/* NProgress background */
#nprogress .bar{
	background: blue !important;
}
#nprogress .peg {
    box-shadow: 0 0 10px {{ $messengerColor }}, 0 0 5px {{ $messengerColor }} !important;
}
#nprogress .spinner-icon {
  border-top-color: hotpink !important;
  border-left-color: darkslategray !important;
}

.m-header svg{
    color: red;
}

.m-list-active,
.m-list-active:hover,
.m-list-active:focus{
	background: yellow;
}

.m-list-active b{
	background: #fff !important;
	color: {{ $messengerColor }} !important;
}

.messenger-list-item td b{
    background: teal;
}

.messenger-infoView nav a{
    color: {{ $messengerColor }};
}

.messenger-infoView-btns a.default{
	color: {{ $messengerColor }};
}

.mc-sender p{
  background:green;
}

.messenger-sendCard button svg{
    color: chartreuse;
}

.messenger-listView-tabs a,
.messenger-listView-tabs a:hover,
.messenger-listView-tabs a:focus{
    color: peru;
}

.active-tab{
	border-bottom: 2px solid hotpink;
}

.lastMessageIndicator{
    color: lightgreen !important;
}

.messenger-favorites div.avatar{
    box-shadow: 0px 0px 0px 2px blue;
}

.dark-mode-switch{
    color: {{ $messengerColor }};
}
.m-list-active .activeStatus{
    border-color: purple !important;
}
</style>
