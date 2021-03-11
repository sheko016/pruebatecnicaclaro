@extends('emails/layouts/emailTemplate')

@section('content')

<table data-module="travel 2" data-thumb="thumbnails/thumbnail2.png" data-bgcolor="Main BG" width="100%" style="font-family: 'Montserrat',Arial, sans-serif;" bgcolor="#ececec" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
        <td align="center">
            <table align="center" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td width="600" bgcolor="#fff" align="center">
                        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td height="60" style="background-color:#fff;font-family: 'Montserrat',Arial, sans-serif;font-size:26px;font-weight:500;letter-spacing:1px;line-height:30px;" align="center">
                                    <center>
                                        <img data-crop="false" style="display:block;"
                                             src="" alt="img" width="65%" />
                                    </center>
                                </td>
                            </tr>
                            </tbody>
						<tr height="50"></tr>
                            <tr>
                                <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:26px;font-weight:600;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60" align="center">
                                    Hola!!
                                </td>
                            </tr>


                            <tr>
                                <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:22px;font-weight:600;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60" align="center">
                                    {{ $firstname }} {{ $lastname }}
                                </td>
                            </tr>
                            <tr>
                                <td height="20"></td>
                            </tr>

                            <tr>
                                <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:500;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60" align="center">

                                    ¡Bienvenido <span style="font-weight: bold">Prueba Técnica de Claro Laravel</span>!

                                </td>
                            </tr>
                            <tr>
                                <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:500;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60" align="center">
                                    {{ $mensaje }}
                                </td>
                            </tr>
                            <tr>
                                <td height="20"></td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <table align="center">
                                        <tbody>
                                            <tr>
                                                <td width="400" align="center">
                                                    <table data-bgcolor="Box" width="90%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                                                        <tbody>
                                                            <tr>
                                                                <td height="10">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center">
                                                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                        <!--image-->
                                                                        <tbody>
                                                                        <tr>
                                                                            <td align="center" width="200" valign="middle" style="border-collapse:collapse!important;border-radius:35px;padding:20px 25px" bgcolor="#6791de">
                                                                                <a href="{{ route('login') }}" style="color:#fff!important;text-decoration:none;display:block;font-size:23px;" target="_blank" >Prueba Claro</a>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="20">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="10">
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                       
                           
                            <tr>
                                <td height="20">
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">
                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <!--image-->
                                        <tbody>
                                        <tr>
                                            <td align="center" width="200" valign="middle">
                                                <a href="#" target="_blank" >Término de uso y acuerdo comercial.</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td height="20"></td>
                            </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>

<table bg-color="#7f8c8d" style="font-family: 'Montserrat', Arial, sans-serif;color:#7f8c8d" width="100%" bgcolor="#fff" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
        <td data-bg="header bg" data-bgcolor="header bg" align="center" bgcolor="#ececec">
            <table align="center" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td width="600" align="center" bgcolor="#fff">
                        <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td height="10"></td>
                            </tr>
                            <tr>
                                <td align="center" data-link-style="text-decoration:none; color:#a2a9af;" data-link-color="Content" data-size="Content" data-color="Content" style="font-family: 'Open Sans', Arial, sans-serif; font-size:15px; color:#a2a9af; line-height:30px;">
                                    <singleline>
                                        &copy; {{ date('Y') }}. Pruebas Técnica Claro Laravel todos los derechos reservados.
                                    </singleline>
                                </td>
                            </tr>
                            <tr>
                                <td height="5"></td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
@endsection