<x-guest-layout>
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Login</h3>
                  </div>
               </div>
            </div>
        </div>
    </section>
    <section class="why_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="full">
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <fieldset>
                                <input type="email" placeholder="Enter email" :value="old('email')" name="email" required autofocus >
                                <input type="password" placeholder="Enter pasword" name="password" required autocomplete="current-password">
                                <a href="{{ route('password.request') }}">Forget password</a>
                                <input type="submit" value="Submit" />
                            </fieldset>
                        </form>
                  </div>
               </div>
            </div>
        </div>
    </section>
</x-guest-layout>
