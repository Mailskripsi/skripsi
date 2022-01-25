@extends('layouts.app')
@section('content')
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Data Keluarga</title>
            <style>
                table, th, td{
                    border-width: 1px;
                    border-style: solid;
                    border-color: pink;
                    border-collapse: collapse;
                    margin: 10px;
                    padding: 10px;
                    text-align: center;
                }

                th{
                    background-color: rgb(255, 206, 197);
                    color: black;
                }

                td{
                    background-color: plum;
                }
            </style>

        </head>
        <body>
            <table>
                <tr>
                    <th>No </th>
                    <th>NIK </th>
                    <th>Nama </th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir </th>
                    <th>Tanggal Lahir </th>
                    <th>Agama </th>
                    <th>No Telp </th>
                    <th>No. Absen </th>
                </tr>
            
                <tr>
                    <td>Josi Kie</td>
                    <td>XI-RPL</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>22</td>
                </tr>
            </table>
        </body>
        </html>
@endsection
