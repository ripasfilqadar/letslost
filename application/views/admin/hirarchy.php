<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAoc-YJOyHqg7eAQCJnIDPRfNZLvSwRfo0"></script>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <label>Cari</label>
          <input class="search-input form-control"></input>
      </div>
      <br>
      <div class="row col-xs-12">
      <div class="col-xs-5" id="jstree"></div>
      <div class="col-xs-7" style="" id="detail">
        <div class="loader" style="display:none">Loading...</div>
        <center>
          <h4>Detail</h4>
        </center>
        <div class="col-xs-12" id="detailText">
          <?php include('lihat.php');?>
        </div>
      </div>
        
      </div>
    <div class="col-md-12">
  </div>
</section>
<script>
  $(function() {
    $(".search-input").keyup(function() {
      var searchString = $(this).val();
      $('#jstree').jstree('search', searchString);
    });
    $('#jstree').jstree({
      'core': {
        'data': <?php echo $test;?>
      },
      "plugins": ["search","wholerow","contextmenu","dnd"],
      "search": {
        "case_insensitive": true,
        "show_only_matches" : true
      },
      "contextmenu": {
        "items": function ($node) {
          return {
            "Create": {
              "label": "Add New Child",
              "action": function (obj) {
                var id = obj.reference.prevObject.selector;
                id = id.replace('#','');
                var url = "<?php echo base_url()?>"+"tree/insertnew/"+id;
                window.location = url;
              }
            },
            /*"Edit": {
              "label": "Edit Item",
              "action": function (obj) {
                var id = obj.reference.prevObject.selector;
                id = id.replace('#','');
                var url = "<?php echo base_url()?>"+"tree/edit/"+id;
                window.location = url;
              }
            },*/
            // "View": {
            //   "label": "View Item",
            //   "action": function (obj) {
            //     var id = obj.reference.prevObject.selector;
            //     id = id.replace('#','');
            //     var url = "<?php echo base_url()?>"+"tree/lihat/"+id;
            //     window.location = url;
            //   }
            // },
            "Delete": {
              "label": "Delete Item",
              "action": function (obj) {
                var id = obj.reference.prevObject.selector;
                id = id.replace('#','');
                console.log(obj);
                alertify.confirm("Hapus Item?",
                    function(){
                      var url = "<?php echo base_url()?>"+"tree/hapus/"+id;
                      window.location = url;
                    },
                    function(){
                      alertify.error('Cancel');
                });
              }
            }
          };
        }
      }
    });
  });

$("#jstree").on('click',"li",function(){
  var id=this.id;
  var url="<?php echo base_url()?>tree/lihat/"+id;
  console.log($(this).attr('aria-selected'))  ;
  // console.log(url);
  
  if ($(this).attr('aria-selected')=='false') {
    return false;
  };
  $(".loader").show();
   $.ajax({
        url: url,
        type: "get",
        success: function (response) {
          // $("#detail").empty();
          $(".loader").hide();
          $("#detailText").html(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
});
</script>
