<!DOCTYPE html>

<head>
    <title>
        Apa iniii?
    </title>
    <link href="{!!url('assets/css/bootstrap.min.css') !!}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <style>
        .textStyle1 {
            text-align: center;
            font-size: 18pt;
            font-weight: bold;
            font-family: "Times New Roman", Times, serif;
        }

        .textStyle2 {
            text-align: center;
            font-size: 12pt;
            font-weight: bold;
            font-family: "Times New Roman", Times, serif;
        }


        .textStyle3 {
            text-align: right;
            font-size: 12pt;
            font-weight: bold;
            font-family: "Times New Roman", Times, serif;
        }

        .textStyle4 {
            text-align: center;
            text-decoration: underline;
            font-size: 11pt;
            font-weight: bold;
            font-family: "Times New Roman", Times, serif;
        }

        .textStyle5 {
            text-align: center;
            font-size: 11pt;
            font-weight: bold;
            font-family: "Times New Roman", Times, serif;
        }

        .textStyle6 {
            text-align: left;
            font-size: 11pt;
            font-weight: normal;
            font-family: "Times New Roman", Times, serif;
        }

        .textStyle7 {
            text-align: left;
            font-size: 11pt;
            font-weight: bold;
            font-family: "Times New Roman", Times, serif;
        }

        #testdiv {
            border-bottom: 3px solid black;
            -moz-box-shadow: 0px 2px 0px #ff0000;
            /* Firefox 3.6 and earlier */
            -webkit-box-shadow: 0px 2px 0px #ff0000;
            /* Safari and Chrome */
            box-shadow: 0px 2px 0px black;
        }

        #testdiv2 {
            border-bottom: 1px solid black;
        }

    </style>
</head>

<body>
    <!--Table-->
    <table id="tablePreview" class="table table-borderless">

        <tr>
            <th colspan="6" id="testdiv">
                <div class="textStyle1">KEJAKSAAN REPUBLIK INDONESIA</div>
                <div class="textStyle2">KEJAKSAAN NEGERI PURWOKERTO</div>

            </th>
        </tr>
        <tr>
            <th colspan="6" class="textStyle3">T-10</th>
        </tr>
        <tr>
            <th colspan="6">
                <div class="textStyle4">SURAT IZIN MENGUNJUNGI TAHANAN</div>
                <div class="textStyle5 align-top">NOMOR : B/ /M.3.13/ / / 2020</div>
            </th>
        </tr>
        <tr>
            <td colspan="6">
                <div class="textStyle6">Diberikan Kepada</div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
            </td>
            <td>
                <div class="textStyle6">Nama</div>
                <div class="textStyle6">Alamat</div>
                <div class="textStyle6">Pekerjaan</div>
                <div class="textStyle6">Hubungan</div>
            </td>
            <td>
                <div class="textStyle6">: </div>
                <div class="textStyle6">: </div>
                <div class="textStyle6">: </div>
                <div class="textStyle6">: </div>
            </td>
            <td colspan="2">
                <div class="textStyle6">{!!$data['name']!!}</div>
                <div class="textStyle6">{!!$data['address']!!}</div>
                <div class="textStyle6">{!!$data['job']!!}</div>
                <div class="textStyle6">{!!$data['relationship']!!}</div>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <div class="textStyle6">Untuk mengunjungi tahanan </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">&nbsp;</div>
            </td>
            <td>
                <div class="textStyle6">Nama lengkap</div>
                <div class="textStyle6">Tempat lahir</div>
                <div class="textStyle6">Umur/tanggal lahir</div>
                <div class="textStyle6">Jenis kelamin</div>
                <div class="textStyle6">Kebangsaan / <br>Kewarganegaraan</div>
                <div class="textStyle6">Tempat tinggal</div>
                <div class="textStyle6">Agama</div>
                <div class="textStyle6">Pekerjaan</div>
                <div class="textStyle6">Pendidikan</div>
                <div class="textStyle6">Reg. Tahanan</div>
                <div class="textStyle6">Keperluan</div>
                <div class="textStyle6">Izin berlaku</div>
            </td>
            <td>
                <div class="textStyle6">: </div>
                <div class="textStyle6">: </div>
                <div class="textStyle6">: </div>
                <div class="textStyle6">: </div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">: </div>
                <div class="textStyle6">: </div>
                <div class="textStyle6">: </div>
                <div class="textStyle6">: </div>
                <div class="textStyle6">: </div>
                <div class="textStyle6">: </div>
                <div class="textStyle6">: </div>
                <div class="textStyle6">: </div>
            </td>
            <td colspan="2">
                <div class="textStyle6">{!!$data['prisioner']['name']!!}</div>
                <div class="textStyle6">{!!$data['prisioner']['address']!!}</div>
                <div class="textStyle6">{!!$data['prisioner']['age']!!} Tahun / {!!$data['prisioner']['birth_days']!!}
                </div>
                <div class="textStyle6">{!!$data['prisioner']['gender']!!}</div>
                <div class="textStyle6">&nbsp;</div>
                <div class="textStyle6">{!!$data['prisioner']['nasionality']!!}</div>
                <div class="textStyle6">{!!$data['prisioner']['address']!!}</div>
                <div class="textStyle6">{!!$data['prisioner']['religion']!!}</div>
                <div class="textStyle6">{!!$data['prisioner']['job']!!}</div>
                <div class="textStyle6">{!!$data['prisioner']['education']!!}</div>
                <div class="textStyle6">{!!$data['prisioner']['prisioner_number']!!}</div>
                <div class="textStyle6">{!!$data['relationship']!!}</div>
                <div class="textStyle6">{!!$data['expired']!!}</div>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div class="textStyle5">&nbsp;</div>
                <div class="textStyle5">&nbsp;</div>
            </td>
            <td colspan="2">
                <div class="textStyle5">PURWOKERTO,-</div>
                <div class="textStyle5">Kepala Kejaksaan Negeri Purwokerto</div>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <div class="textStyle5">&nbsp;</div>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <div class="textStyle5">&nbsp;</div>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div class="textStyle5">&nbsp;</div>
                <div class="textStyle5">&nbsp;</div>
            </td>
            <td colspan="2">
                <div class="textStyle4">{!!$data['officer']['name']!!}</div>
                <div class="textStyle5">Jaksa Utama Pratama NIP. {!!$data['officer']['nip']!!}</div>
            </td>
        </tr>
        <tr>
            <td colspan="2" id="testdiv2">
                <div class="textStyle7">Tembusan :</div>
                <div class="textStyle6">1. Jaksa Penuntut Umum (AD HOC)</div>
                <div class="textStyle6">2. ......</div>
                <div class="textStyle6">3. Arsip.</div>
            </td>
            <td colspan="4">
                <div class="textStyle5">&nbsp;</div>
                <div class="textStyle5">&nbsp;</div>
            </td>
        </tr>
    </table>
    <!--Table-->
</body>