<script type="text/javascript">
    function show_confirm(action,id) {
      if(action=="delete") { 
      swal({
        title: "Are you sure?",
        text: "You will not be able to recover this data!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, Delete it!",
        closeOnConfirm: false
      },
        function(){
          swal("Deleted!", "Successfully Deleted.", "success");
          window.location="<?php echo base_url();?>execute/"+action+"/"+id;
        });
      }

      if(action=="edit") { 
          window.location="<?php echo base_url();?>execute/"+action+"/"+id;
      }
  }
</script>