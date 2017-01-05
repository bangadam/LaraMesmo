
@if(Session::has('pesan'))
        <div class="card-panel red darken-1">
          <p class="white-text center-align" style="font-size: 20px;">{{ Session::get('pesan') }}</p>
        </div>`
@endif
