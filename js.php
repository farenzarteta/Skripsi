<script>
	function deleteTable(id, by, tablename) {
	    var txt;
	    var r = confirm("Apakah anda yakin ingin menghapus user ini?");
	    if (r == true) {
	        window.location="delete.php?id="+id+"&by="+by+"&tablename="+tablename;
	    } else {

	    }
  	}
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"> </script>
<!-- mother grid end here-->