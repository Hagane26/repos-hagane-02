@extends('supporter.main')

@section('title',"IOT Views")

@section('container')

<div class="m-5">
    <center>
        <p> ID Cloud : {{ $channels->get('id') }}</p>
        <table border="2px" width="1000">
            <tr>
                <td class="p-3">
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1327310/charts/1?bgcolor=%23c7c9c8&color=%23d62020&dynamic=true&results=60&title=Data+Mahasiswa+Bertambah&type=bar"></iframe>
                </td>

                <td class="p-3">
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1327310/charts/2?bgcolor=%23c7c9c8&color=%23d62020&dynamic=true&results=60&title=Data+Mahasiswa+Berkurang&type=bar"></iframe>
                </td>
            </tr>

            <tr>
                <td class="p-3" width = 450>
                    <p>Detail Bertambah Data Mahasiswa</p>
                    <p> Jumlah Data Keseluruhan = {{ $channels->get('last_entry_id') }}
                    @php
                        $hasil = 0;
                        for ($i = 0; $i <= ($channels->get('last_entry_id')-1); $i++) {
                            $feed = $feeds[$i]->field1;
                            if($feed == "1"){
                                $hasil = $hasil + (int)$feed;
                            }
                        }
                        echo "<p> Jumlah Data Bertambah = " . $hasil . "</p>";
                    @endphp
                </td>

                <td class="p-3" width = 450>
                    <p>Detail Berkurang Mahasiswa</p>
                    <p> Jumlah Data Keseluruhan = {{ $channels->get('last_entry_id') }}
                        @php
                            $hasil = 0;
                            for ($i = 0; $i <= ($channels->get('last_entry_id')-1); $i++) {
                                $feed = $feeds[$i]->field2;
                                if($feed == "1"){
                                    $hasil = $hasil + (int)$feed;
                                }
                            }
                            echo "<p> Jumlah Data Berkurang = " . $hasil . "</p>";
                        @endphp
                </td>
            </tr>

        </table>
    </center>
</div>
@endsection
