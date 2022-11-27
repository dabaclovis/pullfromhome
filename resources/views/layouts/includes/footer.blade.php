<div class=" p-2 bg-secondary text-white">
    <div class=" container">
        <div class=" text-center">
            <a href="{{ url('about') }}" class="btn btn-primary">About</a>
            <a href="{{ url('policy') }}" class="btn btn-primary">Policy</a>
            <a href="https://github.com/dabaclovis" target="_blank" class="btn btn-primary">Github</a>
            <a href="https://linkedin.com/in/dabaclovis" target="_blank" class="btn btn-primary">Linkedin</a>
        </div>
        <div class=" text-center w3-topbar w3-border-sand">
            <div>&copy; 2022. All Right Reserve</div>
            <div><a href="{{ url('/') }}">thecloudlearners</a></div>
        </div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    @livewireScripts
    <script>
        var git = document.querySelector("#git");
        git.addEventListener('click', gitFxn);

        function gitFxn(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','{{ route("cont.git") }}', true)
            xhr.send();
            xhr.onload = function()
            {
                if (xhr.status == 200) {
                    var data = xhr.responseText;
                    var show = document.querySelector("#land");
                    show.innerHTML = data;

                }
            }
        }
        var maven = document.querySelector("#maven");
        maven.addEventListener('click', mavenFxn);

        function mavenFxn(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','{{ route('cont.maven') }}', true)
            xhr.send();
            xhr.onload = function()
            {
                if (xhr.status == 200) {
                    var data = xhr.responseText;
                    var show = document.querySelector("#land");
                    show.innerHTML = data;

                }
            }
        }
        var linux = document.querySelector("#linux");
        linux.addEventListener('click', linuxFxn);

        function linuxFxn(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','{{ route('cont.linux') }}', true)
            xhr.send();
            xhr.onload = function()
            {
                if (xhr.status == 200) {
                    var data = xhr.responseText;
                    var show = document.querySelector("#land");
                    show.innerHTML = data;

                }
            }
        }
        var jenkins = document.querySelector("#jenkins");
        jenkins.addEventListener('click', jenkinsFxn);

        function jenkinsFxn(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','{{ route('cont.jenkins') }}', true)
            xhr.send();
            xhr.onload = function()
            {
                if (xhr.status == 200) {
                    var data = xhr.responseText;
                    var show = document.querySelector("#land");
                    show.innerHTML = data;

                }
            }
        }
        var ansible = document.querySelector("#ansible");
        ansible.addEventListener('click', ansibleFxn);

        function ansibleFxn(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','{{ route('cont.ansible') }}', true)
            xhr.send();
            xhr.onload = function()
            {
                if (xhr.status == 200) {
                    var data = xhr.responseText;
                    // console.log(data);
                    var show = document.querySelector("#land");
                    show.innerHTML = data;

                }
            }
        }
        var docker = document.querySelector("#docker");
        docker.addEventListener('click', dockerFxn);

        function dockerFxn(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','{{ route('cont.docker') }}', true)
            xhr.send();
            xhr.onload = function()
            {
                if (xhr.status == 200) {
                    var data = xhr.responseText;
                    // console.log(data);
                    var show = document.querySelector("#land");
                    show.innerHTML = data;

                }
            }
        }
        var nagios = document.querySelector("#nagios");
        nagios.addEventListener('click', nagiosFxn);

        function nagiosFxn(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','{{ route('cont.nagios') }}', true)
            xhr.send();
            xhr.onload = function()
            {
                if (xhr.status == 200) {
                    var data = xhr.responseText;
                    // console.log(data);
                    var show = document.querySelector("#land");
                    show.innerHTML = data;

                }
            }
        }
        var terraform = document.querySelector("#terraform");
        terraform.addEventListener('click', terraformFxn);

        function terraformFxn(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','{{ route('cont.terraform') }}', true)
            xhr.send();
            xhr.onload = function()
            {
                if (xhr.status == 200) {
                    var data = xhr.responseText;
                    // console.log(data);
                    var show = document.querySelector("#land");
                    show.innerHTML = data;

                }
            }
        }
    </script>
  </body>
</html>
