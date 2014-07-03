<form id="formtest" name="formtest" ic-post-to="admin/test" enctype="multipart/data">
	<input type="file" id="imagen" name="imagen">
	<input type="hidden" id="txt" name="txt" value="123">
	<button class="btn btn-info btn-block login" ic-include="#imagen" type="submit">Ingresar</button>
</form>
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
                	pickTime: false
                });
            });
        </script>
    </div>
</div>