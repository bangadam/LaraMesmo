
@if(Session::has('pesan'))
        <div class="card-panel red darken-1">
          <span class="white-text center-align">{{ Session::get('pesan') }}</span>
        </div>
@endif
