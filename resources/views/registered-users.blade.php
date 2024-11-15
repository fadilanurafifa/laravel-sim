{{-- <table style="width: 100%; border-collapse: collapse; margin: 20px 0; font-family: Arial, sans-serif;">
    <thead style="background-color: #353b41; color: white;">
        <tr>
            <th style="padding: 15px; text-align: left; border: 1px solid #ddd;">Nama</th>
            <th style="padding: 15px; text-align: left; border: 1px solid #ddd;">Email</th>
            <th style="padding: 15px; text-align: left; border: 1px solid #ddd;">Tanggal Registrasi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr style="border: 1px solid #ddd;">
            <td style="padding: 15px; text-align: left; border: 1px solid #ddd;">{{ $user->name }}</td>
            <td style="padding: 15px; text-align: left; border: 1px solid #ddd;">{{ $user->email }}</td>
            <td style="padding: 15px; text-align: left; border: 1px solid #ddd;">{{ $user->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table> --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<table class="table">
    <thead style="background-color: #02293b; color:white">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Tanggal Registrasi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $index => $user)
        <tr>
            <th scope="row">{{ $index + 1 }}</th> 
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<footer style="
text-align: center;
padding: 15px;
color: rgb(0, 0, 0);
font-size: 14px;
padding-top: 55px;
">
<strong>Copyright &copy; 2024 <a href="/sesi" style="color: rgb(50, 77, 196); text-decoration: none;">SIMedia</a>.</strong>
All rights reserved.
<div style="float: right; display: inline-block;">
    <b>Version</b> 3.2.0
</div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

