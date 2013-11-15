/*  Modals*/
$('#content').on('click', '#newtopic',function(e) {
             e.preventDefault();
            $('#topic_form_modal').bPopup({
                zIndex: 2,
                contentContainer:'.newform',
                loadUrl: $(this).attr('name'), //Uses jQuery.load()
                modalClose: true,
                follow: [10, 30], //x, y
                position: [10, 30], //x, y

            });
         });
$('#content').on('click', '#newcategory',function(e) {
        e.preventDefault();
        $('#category_form_modal').bPopup({
            zIndex: 2,
            contentContainer:'.newcategory',
            loadUrl: $(this).attr('name'), //Uses jQuery.load()
            modalClose: true,
            // follow: [true, true], //x, y
            follow: [10, 30], //x, y
            position: [10, 30], //x, y
            onClose: function(){
             }

        });

 });
$('#content').on('click', '.update-category',function(e) {
        e.preventDefault();
        $('#category_update_modal').bPopup({
            zIndex: 2,
            contentContainer:'.updatecategory',
            loadUrl: $(this).attr('name'), //Uses jQuery.load()
            modalClose: true,
           // follow: [false, false], //x, y
            positionStyle: 'fixed',
            position: [10, 30], //x, y
            onClose: function(){
              }
        });

 });

 $('#content').on('click','#newcomment', function(e) {
        e.preventDefault();
                openCommentModal($(this).attr('name'));
            });
$('#content').on('click',"#addAttachment",function(e){
     e.preventDefault();
            $('#attachment_modal').bPopup({
                zIndex: 2,
                modalClose: true,
             //   follow: [false, false], //x, y
                positionStyle: 'fixed',
                position: [10, 30] //x, y
            });
});
 $('#content').on('click','#edit',function(){
             $('#edit_topic_content_modal').bPopup({
                zIndex: 2,
                modalClose: true,
              //  follow: [false, false], //x, y
                positionStyle: 'fixed',
                position: [10, 30] //x, y
            });

    });
 $('.comment').on('click','.editComment',function(){
             $('#edit_comment_content_modal'+$(this).attr('name')).bPopup({
                zIndex: 2,
                modalClose: true,
//                follow: [false, false], //x, y
                positionStyle: 'fixed',
                position: [10, 30] //x, y
            });

    });
/*event triggers */
 $("#button-category-browse").on('click',function(){
        $("#manage-category-browse").fadeToggle('slow');
    });
 $("#button-topic-browse").on('click',function(){
            topicTable();
            $("#manage-topic-browse").fadeToggle('slow');
        });
$("#search-results").on('click',"#closeSearch",function(){
    $("#search-results").fadeOut('slow');
});
$(".downvote").on('click',function(){
    changeVote($(this).attr('name'),'down');
    $(this).remove();
});
$(".upvote").on('click',function(){
    changeVote($(this).attr('name'),'up');
    $(this).remove();
});
$("#make_sticky").on('click',function(){
            changeSticky($(this).attr('name'),1);
        });
 $("#remove_sticky").on('click',function(){
            changeSticky($(this).attr('name'),0);
        });

 $("body").on('submit','#category-form',function(e){
        e.preventDefault();
        submitCategoryForm($(this).serialize());
        return false;
    });
 $("body").on('submit','#comment-form',function(event){
        event.preventDefault();
        submitCommentForm($(this).serialize());
        return;         
    });
$(".button-manage").on('click',function(){
    $(".div-manage").hide();
    var id = $(this).attr('id');
    var type = id.replace('button-','');
    $("#manage-"+type).fadeToggle();

   if(type=="stats"){
        $('.visualize').remove();
        $('#stats-chart').visualize();
    }
   if(type=="trashbin"){
        loadTrashbin();
   }
   if(type=="categories"){
        loadCategoryAdmin();
   }
});
 $("body").on('submit','#topic-form',function(event){
        event.preventDefault();
        var captcha = $(".TxtStatus").html();
        if(captcha == "human"){
            submitTopicForm($(this).serialize());
        }else{
            $().toastmessage('showErrorToast', "Captcha error!"); 
        }
        return false;           
    });
$("body").on('click','.save_comment_content',function(){ 
        var id = $(this).attr('name');
        var content = $("#edit_comment_content"+id).val();
    $.ajax({
        type: "POST",
        url: "/sforum/comment/saveContent",
        data: {content:content,id:id},
        cache:false,
        dataType: 'json',
        success:function( data ) {
        if(data.status == 'success'){
            $('#edit_comment_content_modal'+id).bPopup().close();
            $().toastmessage('showSuccessToast', "Success!");
            $("#edit_comment_content"+id).val(data.content);
            $("#viewComment"+id).html(data.content);

        }else{
            $().toastmessage('showErrorToast', "Unexpected error!");
        }
        },
     });
    });
$(".comment").on('click','.deleteComment',function(){
    deleteModel('Comment',$(this).attr('name'));
});

$("#topicAdmin").on('click','.deleteTopic',function(){
    deleteModel('Topic',$(this).attr('name'));
});


$("#edit_topic_content_modal").on('click','#save_topic_content',function(){ 
        var content = $("#edit_topic_content").val();
        var id = $(this).attr('name');
    $.ajax({
        type: "POST",
        url: "/sforum/topic/saveContent",
        data: {content:content,id:id},
        cache:false,
        dataType: 'json',
        success:function( data ) {
        if(data.status == 'success'){
            $('#edit_topic_content_modal').bPopup().close();
            $().toastmessage('showSuccessToast', "Success!");
            $("#edit_topic_content").val(data.content);
            $("#view_topic_content").html(data.content);

        }else{
            $().toastmessage('showErrorToast', "Unexpected error!");
        }
        },
     });
    });

$("#attachments").on('click','.delAttachment',function(){

        var filePath = $(this).attr('name');
        var obj = $(this);
        
        $.ajax({
        type: "POST",
        url: "/sforum/topic/deleteAttachment",
        data: {filePath:filePath},
        cache:false,
        dataType: 'json',
        success:function( data ) {
        if(data.status == 'success'){
             $().toastmessage('showSuccessToast', "Successfully deleted!");
             obj.parent().remove();
        }else{
            $().toastmessage('showErrorToast', "Unexpected error!");
         }
        },
    });
});
$('.title_edit_trigger').on('click','.topic_title',function(){
        $(this).editable(function(value, settings) { 
            $.ajax({
                type: "POST",
                url: "/sforum/topic/saveTitle",
                data: {title:value,id:$(this).attr('name')},
                cache:false,
                dataType: 'json',
                success:function( data ) {
                  if(data.status == 'success'){
                     $().toastmessage('showSuccessToast', "Saved!");
                }else{
                   $().toastmessage('showErrorToast', "Unexpected error!");
              }
            },
         });
        
         return(value);
        },
        {
         indicator : 'Saving...',
         tooltip   : 'Click to edit the title',
        
         });
    });

/* this function runs after search results is found, so instead of writing it twice i trigger it here to
it's what makes the "more" button(or rather the entire td column) toggle the visibility of the second tr
in all tables
 */
activateToggleTrigger();
  $("#categorytable").on('click','.toggleColumn',function(){
                $(this).parent().next("tr").toggle();
                $(this).find(".arrow").toggleClass("up");
            });
 $("#searchbox").on('keyup',function(e){
        e.preventDefault();
        var search = $(this).val();
        if(search.length > 0){
             $.ajax({
                type: "POST",
                url: "/sforum/topic/search",
                data: {search:search},
                cache:false,
                dataType: 'json',
                success:function( data ) {
                if(data.status == 'success'){
                    $("#search-results").html(data.content);
                    topicTable();
                    activateToggleTrigger();
                    $("#search-results").fadeIn('slow');
                }else{
                    $().toastmessage('showErrorToast', "Unexpected error!");
                }
                },
             });
        }else{
            $("#search-results").fadeOut('slow');
        };
     });    
/*functions*/
function activateToggleTrigger(){
     $(".topic-table").on('click','.toggleColumn',function(){
                $(this).parent().next("tr").toggle();
                $(this).find(".arrow").toggleClass("up");
            });
}
 function topicTable(){
                $(".topic-table tr:odd").addClass("odd");
                $(".topic-table tr:not(.odd)").hide();
                $(".topic-table tr:first-child").show();
           }
 function categoryTable(){
                $("#categorytable tr:odd").addClass("odd");
                $("#categorytable tr:not(.odd)").hide();
                $("categorytable tr:first-child").show();
           }
function adminJs(){
    $("#categoryList").sortable({ 
        cursor: 'crosshair',
      });   
     $(".delete-category").on('click',function(){
        var id = $(this).parent().attr('id');
        deleteModel('Category',id);
    });
    $("#categoryList").bind( "sortupdate", function(event, ui) {
        updatePos();
    });
}

function updatePos() {
        var pos = $("#categoryList").sortable('toArray');
      $.ajax({
        type: "POST",
        url: "/sforum/category/updatePos",
        data: {pos:pos},
        cache:false,
        dataType: 'json',
        success:function( data ) {
        if(data.status == 'success'){
           $().toastmessage('showSuccessToast', "The view order of your categories was updated!");

        }else{
            $().toastmessage('showErrorToast', "Unexpected error with sorting");
        }
        },
     });
    }
/*functions */
function getView(id){
    $.ajax({'url':'/sforum/topic/view?id='+id,'cache':false,'success':function(html){jQuery("#content").html(html);}});
}
function getExtension(filename) {
    return filename.split('.').pop().toLowerCase();
}
function changeVote(id,type){
    $.ajax({
        type: "POST",
        url: "/sforum/comment/changeVote",
        data: {id:id,type:type},
        cache:false,
        dataType: 'json',
        success:function( data ) {
        if(data.status == 'success'){
            if(data.rating < 0){
                $('#rating-'+data.id).removeClass('btn-success').addClass('btn-danger');
            }   
            else{
                $('#rating-'+data.id).removeClass('btn-danger').addClass('btn-success');
            }         
                $('#rating-'+data.id).html(data.rating);
        }else{
            $().toastmessage('showErrorToast', "Unexpected error!");
        }
        },
     });
}

 function loadTrashbin(){
  $.ajax({
            type: "POST",
            url: "/category/1/trashbin",
            data: {},
            cache:false,
            dataType: 'json',
            success:function( data ) {
            if(data.status == 'success'){
                $("#manage-trashbin").html(data.view);
                activateToggleTrigger();

            }else{
                $().toastmessage('showErrorToast', "Unexpected error with loading the trashbin!");
            }
            },
         });
}
function loadCategoryAdmin(){
  $.ajax({
        type: "POST",
        url: "/sforum/category/admin",
        data: {},
        cache:false,
        dataType: 'json',
        success:function( data ) {
        if(data.status == 'success'){
            $("#gridview-wrapper").html(data.view);
        }else{
            $().toastmessage('showErrorToast', "Unexpected error with loading the category/admin view!");
        }
        },
     });
}

 function openCommentModal(url)
 {
   $('#comment_form_modal').bPopup({
                    zIndex: 2,
                    contentContainer:'.newcomment',
                    loadUrl: url, //Uses jQuery.load()
                    modalClose: false,
                 //   follow: [false, false], //x, y
                    positionStyle: 'fixed',
                    position: [10, 30] //x, y
                });
}
function submitTopicForm(data){

    $.ajax({
        type: "POST",
        url: "/sforum/topic/create",
        data: data,
        cache:false,
        dataType: 'json',
        success:function( data ) {
        if(data.status == 'success'){
        $("#topic-form").empty();
         $('#topic_form_modal').bPopup().close();
        getView(data.id);
        }else{
            $().toastmessage('showErrorToast', "Unexpected error!");
        }
        },
     });
}
function changeSticky(id,sticky){

    $.ajax({
        type: "POST",
        url: "/sforum/topic/changeSticky",
        data: {id:id,sticky:sticky},
        cache:false,
        dataType: 'json',
        success:function( data ) {
        if(data.status == 'success'){
            $().toastmessage('showSuccessToast', "Sucess!");
        }else{
            $().toastmessage('showErrorToast', "Unexpected error!");
        }
        },
     });
}

function submitCommentForm(data){

    $.ajax({
        type: "POST",
        url: "/sforum/comment/create",
        data: data,
        cache:false,
        dataType: 'json',
        success:function( data ) {
        if(data.status == 'success'){
            $('#comment_form_modal').bPopup().close();
            getView(data.id);
        }else{
            $().toastmessage('showErrorToast', "Unexpected error!");
        }
        },
     });
}
function submitCategoryForm(data){

    $.ajax({
        type: "POST",
        url: "/main/sforum/category/create",
        data: data,
        cache:false,
        dataType: 'json',
        success:function( data ) {
        if(data.status == 'success'){
            $("#category-form").empty();
            $('#category_form_modal').bPopup().close();
            $('#category_update_modal').bPopup().close();
            $().toastmessage('showSuccessToast', "Added the category!");
            loadCategoryAdmin();
        }else{
            $().toastmessage('showErrorToast', "Unexpected error!");
        }
        },
     });
}

function deleteModel(modelClass,id){
    $.confirm({
        'title'     : 'Delete Confirmation',
        'message'   : 'You are about to delete this item. <br />It cannot be restored at a later time! Continue?',
        'buttons'   : {
            'Yes'   : {
                'class' : 'btn btn-success',
                'action': function(){
                     $.ajax({
                        type: "POST",
                        url: "/sforum/admin/delete",
                        data: {modelClass:modelClass, id:id},
                        cache:false,
                        dataType: 'json',
                        success:function( data ) {
                        if(data.status == 'success'){
                            if(modelClass== 'Comment'){
                                $('a[name="'+id+'"]').parent().remove();
                            }
                            if(modelClass=='Category'){
                                $("#categoryList > #"+id).remove();
                            }
                        $().toastmessage('showSuccessToast', "Successfully deleted!");

                        }else{
                            $().toastmessage('showErrorToast', "Unexpected error!");
                         }
                        },
                    });
                }
            },
            'No'    : {
                'class' : 'btn',
                'action': function(){}  // Nothing to do in this case. You can as well omit the action property.
            }
        }
    });
}