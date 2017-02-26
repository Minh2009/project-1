/**
 * Created by HDMIN on 2/24/2017.
 */

function doistatus(cvl)
{
    $.ajax({
        url:"suastatus.php",
        type:"POST",
        data:{
            cvl:cvl
        },
        success:function(giatri) {
        }

    });
}