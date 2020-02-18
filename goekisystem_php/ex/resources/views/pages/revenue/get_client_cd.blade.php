@foreach($data['item'] as $row)
    <option value="{{$row['client_cd']}}">{{$row['client_name']}}</option>
@endforeach
