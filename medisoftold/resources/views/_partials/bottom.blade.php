<!-- Bootstrap 3.3.7 -->
{{ Html::script('public/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}
<!-- SlimScroll -->
{{ Html::script('public/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}
<!-- FastClick -->
{{ Html::script('public/assets/bower_components/fastclick/lib/fastclick.js')}}
{{ Html::script('public/assets/dist/js/adminlte.min.js')}}
<!-- AdminLTE for demo purposes -->
{{ Html::script('public/assets/dist/js/demo.js')}}

	<!-- We Include js files when needed only -->
	@yield('extra-js')

</body>
</html>
