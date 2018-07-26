<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            @component('componentes.social')

            {{-- @slot('link')
              <a href="http://twiter.com/treinaweb">
            @endslot
             --}}

              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            @endcomponent

            @component('componentes.social')
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            @endcomponent

            @component('componentes.social')
              <i class="fa fa-github fa-stack-1x fa-inverse"></i>
            @endcomponent

          </ul>
          <p class="copyright text-muted">Copyright &copy; Treinaweb 2018</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  {{-- para usar os scripts --}}
  @stack('scripts')

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>