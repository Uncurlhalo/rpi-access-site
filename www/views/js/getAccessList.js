$.ajax({
  url: 'files/accessList.txt',
  dataType: "html",
  success: function(data){
     //load content to div
     $("#currentAccess").html(data);
  }
});
