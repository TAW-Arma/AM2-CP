<section id="widget-grid" class="">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-collapsed="false" data-widget-sortable="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                    <h2>{{ Lang::get('administration.updatearma') }}</h2>
                    <div class="widget-toolbar" role="menu">
                        <button id="update_arma" class="btn btn-default">{{ Lang::get('general.back') }}</button>
                    </div>
                </header>
                <div>
                    <div class="jarviswidget-editbox">
                    </div>
					<div class="widget-body no-padding">
                        <pre id="console_output"><?php system('C:/Steam/steamapps/common/Arma 3 Server/armaupdate.cmd'); ?></pre>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
<script type="text/javascript">
    pageSetUp();
    var pagefunction = function()
    {
		$('#update_arma').click(function() {
			$.ajax({
				type:   'GET',
				url:    '//cp.am2.taw.net/backend/administration/update_arma',
				data:   { format: 'json' },
			}).done(function(data) {
				console.log(data.console_output);
				$('#console_output').html(data.console_output);
			});
		});
    };
    pagefunction();
</script>
