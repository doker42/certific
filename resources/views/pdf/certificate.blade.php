<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">

    span {
        color: darkblue;
        font-size: large;
        font-weight: bolder;
    }

</style>


<div class="text-center">
    <h1>Certificate #{{ $certificate->num }}</h1>
    <div>
        certificate created: <span>{{ $certificate->created_at->format('d-m-Y') }}</span>
    </div>
    <br>
    <div>
        Person full name: <span>{{$certificate->full_name}}</span>
    </div>
    <br>
    <div>
        Graduted Curse <span>{{$certificate->curse}}</span>
    </div>
    <br>
    <div>
        graduete date: <span>{{$certificate->graduated}}</span>
    </div>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2>QR Code</h2>
            </div>
            <div class="card-body">
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->generate($link)) !!} ">
            </div>
        </div>
    </div>
</div>


