            var base_url= "http://localhost/projects/prj_banlap/";
            $(document).ready(function(){
                $("button#okdn").click(function(){
                    user= $("#txtuserdn").val();
                    pass= $("#txtpassdn").val();
                    maantoan= $("#txtmaantoandn").val();
		$.ajax({
			url:base_url+"ajax/dangnhap_kt.html",
			type:"post",
            dataType:"json",
			data:"user="+user+"&pass="+pass+"&maantoan="+maantoan,
			async:true,
			success:function(kq){
                            if(kq.st==1){
                                $("#loidn").html(kq.msg);
                                $("#loidn").show();
                            }else{
                                window.location.href= kq.redirect;
                            }
			}
		});
                    return false;
                });
            });