$(function() {

    var h = null;

    var f = 10;

    var a = 0;

    var j = {

        FIdx: 0,

        EIdx: f,

        isCount: 1
    };
    var d = $("#divLotteryLoading");

    var l = $("#btnLoadMore");

    var m = false;

    var c = function(o) {

        if (o && o.stopPropagation) {

            o.stopPropagation()

        } else {

            window.event.cancelBubble = true

        }

    };

    var b = function() {

        var o = function() {

            return "/" + j.FIdx + "/" + j.EIdx + "/" + j.isCount

        };

		 

        var p = function() {

            d.show();

            GetJPData(Gobal.Webpath, "ajax", "getLotteryList"+o(),

            function(s) {			 

                if (s.code == 0) {

                    if (j.isCount == 1) {

                        a = s.count						

                    }

                    var r = s.listItems;

                    var t = r.length;

                    for (var q = 0; q < t; q++) {

                            if(r[q].userphoto!='photo/member.jpg') {
                                var v = '<ul id="' + r[q].id + '"><li class="revConL">' + (r[q].codeType == 1 ? '<span class="z-limit-tips">限时获得</span>': "") + '<img src="' + Gobal.LoadPic + '" src2="'+Gobal.imgpath+'/uploads/' + r[q].thumb + '"></li><li class="revConR"><dl><dd class="touxianga"><img name="uImg" uweb="' + r[q].q_uid + '" src="'+Gobal.imgpath+'/uploads/' + r[q].userphoto + '"></dd><dd><span>获得者<strong>：</strong><a name="uName" uweb="' + r[q].q_uid + '" class="rUserName blue">' + r[q].q_user + '</a></span>本期购买<strong>：</strong><em class="orange arial">' + r[q].gonumber + '</em>人次</dd></dl><dt>幸运码：<em class="orange arial">' + r[q].q_user_code + '</em><br/>获得时间：<em class="c9 arial">' + r[q].q_end_time + '</em></dt><b class="fr z-arrow"></b></li></ul>';
                            }else if(r[q].userphotow!=''){
                                var v = '<ul id="' + r[q].id + '"><li class="revConL">' + (r[q].codeType == 1 ? '<span class="z-limit-tips">限时获得</span>': "") + '<img src="' + Gobal.LoadPic + '" src2="'+Gobal.imgpath+'/uploads/' + r[q].thumb + '"></li><li class="revConR"><dl><dd class="touxianga"><img name="uImg" uweb="' + r[q].q_uid + '" src="'+Gobal.imgpath+'/uploads/' + r[q].userphoto +'"></dd><dd><span>获得者<strong>：</strong><a name="uName" uweb="' + r[q].q_uid + '" class="rUserName blue">' + r[q].q_user + '</a></span>本期购买<strong>：</strong><em class="orange arial">' + r[q].gonumber + '</em>人次</dd></dl><dt>幸运码：<em class="orange arial">' + r[q].q_user_code + '</em><br/>获得时间：<em class="c9 arial">' + r[q].q_end_time + '</em></dt><b class="fr z-arrow"></b></li></ul>';

                            }else{
                                var v = '<ul id="' + r[q].id + '"><li class="revConL">' + (r[q].codeType == 1 ? '<span class="z-limit-tips">限时获得</span>': "") + '<img src="' + Gobal.LoadPic + '" src2="'+Gobal.imgpath+'/uploads/' + r[q].thumb + '"></li><li class="revConR"><dl><dd class="touxianga"><img name="uImg" uweb="' + r[q].q_uid + '" src="'+Gobal.imgpath+'/uploads/' + r[q].userphoto + '"></dd><dd><span>获得者<strong>：</strong><a name="uName" uweb="' + r[q].q_uid + '" class="rUserName blue">' + r[q].q_user + '</a></span>本期购买<strong>：</strong><em class="orange arial">' + r[q].gonumber + '</em>人次</dd></dl><dt>幸运码：<em class="orange arial">' + r[q].q_user_code + '</em><br/>获得时间：<em class="c9 arial">' + r[q].q_end_time + '</em></dt><b class="fr z-arrow"></b></li></ul>';

                            }
                        var u = $(v);

                        u.click(function() {

                            location.href = Gobal.Webpath+"/mobile/mobile/item/" + $(this).attr("id")

                        }).find('img[name="uImg"]').click(function(w) {

                            location.href = Gobal.Webpath+"/mobile/mobile/userindex/" + $(this).attr("uweb");

                            c(w)

                        });

                        u.find('a[name="uName"]').click(function(w) {

                            location.href = Gobal.Webpath+"/mobile/mobile/userindex/" + $(this).attr("uweb");

                            c(w)

                        });

                        d.before(u)

                    }

                    if (j.EIdx < a) {

                        m = false;

                        l.show()

                    }

                    loadImgFun()

                }

                d.hide()

            })

        };

        this.getInitPage = function() {

            p()

        };

        this.getNextPage = function() {

            j.FIdx += f;

            j.EIdx += f;

            p()

        }

    };

    l.click(function() {

        if (!m) {

            m = true;

            l.hide();

            h.getNextPage()

        }

    });

    h = new b();

    h.getInitPage();

    var e = ",";

    var n = false;

    var g = 0;

    var i = $("#divLottery");

	

    var k = function() {

        GetJPData(Gobal.Webpath, "ajax", "GetStartRaffleAllList/" + g,

        function(p) {
        	
            if (p.errorCode == 0) {

                o(p)

            }

            setTimeout(k, 5000)

        });

		// 每5秒显示3个倒计时
		
//		function(p) {
//			console.log(p);
//          if (p.errorCode == 0) {
//          	p.listItems = p.listItems.slice(0, 3);
//      		console.log(p.listItems);
//              o(p)
//          }
//          var second = 0;
//          var secondArray = [];
//          for (var i=0; i<3; i++) {
//          	if(seconds in p.listItems[i]) {
//          		secondArray.push(p.listItems[i].seconds);
//          	}
//          }
//          secondArray.sort(function(a, b) {
//          	return b-a;
//          });
//          if(secondArray.length === 0){
//          	secondArray[0] = 5;
//          }
//			console.log(secondArray);
//          setTimeout(k, secondArray[0]);
//      });

        var o = function(q) {

            g = q.maxSeconds;

            var p = function(t) {

                for (var r = t.length - 1; r > -1; r--) {

                    var s = t[r];

                    if (e.indexOf("," + s.id + ",") < 0) {

                        e += s.id + ",";

                        var u = $('<ul class="rNow rFirst" id="' + s.id + '"><li class="revConL"><img src="'+Path.path+'/statics/uploads/'+ s.thumb + '"></li><li class="revConR"><h4>(第' + s.qishu + "期)" + s.title + "</h4><h5>价值：￥" + CastMoney(s.money) + '</h5><p name="pTime"><s></s>获得倒计时 <strong><em>00</em> : <em>00</em> : <em>0</em><em>0</em></strong></p><b class="fr z-arrow"></b></li></ul>');

                        u.click(function() {

                            location.href = "/?/mobile/mobile/item/" + $(this).attr("id");

                        });

                        i.prepend(u);

                        u.next().removeClass("rFirst");

                        u.StartTimeOut(s.id, parseInt(s.seconds))

                    }

                }

            };

            if (n) {

                p(q.listItems)

            } else {

                Base.getScript(Gobal.Skin + "/js/mobile/LotteryTimeFun.js",

                function() {

                    n = true;

                    p(q.listItems)

                })

            }

        }

    };

    Base.getScript(Gobal.Skin + "/js/mobile/comm.js", k)

    $(window).scroll(function () {         
        if ($(document).height() - $(this).scrollTop() - $(this).height() < 1
                && $('#btnLoadMore').css('display')!='none' ){
            if (!m) {
                m = true;
                l.hide();
                h.getNextPage();
            }
        }
    });
    
});