

function myfun(datavalue){

            $.ajax({
                url:'biryani_area.php',
                type:'POST',
                data:{datapost:datavalue},
                success:function(result){
                    $('#city').html(result);
                }
            });
    }

    function login(){
                  var user=$("#username").val();
                  var pass=$("#password").val();
                $.ajax({
                    url:'login_check.php',
                    type:'POST',
                    data:{
                      username:user,
                      password:pass
                    },
                    success:function(result){
                      console.log(result);
                      if(result=="0"){
                        document.getElementById("msg").innerHTML="username or password not found";
                      }
                      else{
                        window.location="index.php";
                      }
                    }
                });
        }

        function Validation(){
        var flag=0;
        const city1=["Rajeev Nagar","Sector 14","Sector 17","Sector 5","Sector 4"];
        let value=document.getElementById("locality1").value;

        for(let i=0;i<city1.length;i++){
        if(value==city1[i]){
        flag=1;
        }
        }

        return flag;

        }

function checkout(id){
  $.ajax({
      url:'checkout.php',
      type:'POST',
      data:{
        id:id
            },
      success:function(result){
        window.location="Enquiry.php";
        }

  });
}
