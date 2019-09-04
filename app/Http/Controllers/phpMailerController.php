<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class phpMailerController extends Controller
{
    public function contactMail (){

      $data= 1;
      
      if(isset($_POST['send'])) {

        require 'vendor/autoload.php';
        
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];
      
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->Username = 'webjagadtour@gmail.com'; // Email Yang Digunakan untuk Mengirim ----------------------- SETTING EMAIL TERLEBIH DULU
        $mail->Password = 'jagadtour123'; // Password Email Yang Digunakan Untuk Mengirim ----- SETTING EMAIL TERLEBIH DULU
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->isHTML(true);
        $mail->addAddress('liwaalex99@gmail.com'); // Email Yang Penerima Pesan.. Contoh = JagadTour@gmail.com
        $mail->setFrom('webjagadtour@gmail.com', 'Jagad Tour'); // Email Yang Mengirim Pesan .. Contoh = JagadTour2@gmail.com
        $mail->Subject = 'Pengirim ' . $nama;
        $mail->Body = '      
                 
              <body style="height: 100%; margin: 0; padding: 0; width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #FAFAFA;">
              <!--*|IF:MC_PREVIEW_TEXT|*-->
              <!--[if !gte mso 9]>
              <!---->
              <span class="mcnPreviewText" style="font-size: 0px; line-height: 0px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; visibility: hidden; mso-hide: all; display: none;">Kiriman Email dari Pelanggan</span>
              <!--
              <![endif]-->
              <!--*|END:IF|*-->
              <center>
                <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; height: 100%; margin: 0; padding: 0; width: 100%; background-color: #FAFAFA;" bgcolor="#FAFAFA">
                  <tr>
                    <td align="center" valign="top" id="bodyCell" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; height: 100%; margin: 0; width: 100%; padding: 10px; border-top: 0;" width="100%" height="100%">
                      <!-- BEGIN TEMPLATE // -->
                      <!--[if (gte mso 9)|(IE)]>
                      <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                        <tr>
                          <td align="center" valign="top" width="600" style="width:600px;">
                            <![endif]-->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border: 0; max-width: 600px;">
                              <tr>
                                <td valign="top" id="templatePreheader" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #FAFAFA; background-image: none; background-repeat: no-repeat; background-position: center; background-size: cover; border-top: 0; border-bottom: 0; padding-top: 9px; padding-bottom: 9px;" bgcolor="#FAFAFA" background="none">
                                  <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; min-width: 100%;">
                                    <tbody class="mcnImageBlockOuter">
                                      <tr>
                                        <td valign="top" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding: 9px;" class="mcnImageBlockInner">
                                          <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; min-width: 100%;">
                                            <tbody>
                                              <tr>
                                                <td class="mcnImageContent" valign="top" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align: center;" align="center">
                                                  <img align="center" alt="" src="https://gallery.mailchimp.com/095f958e797e8d60296fc8499/images/bcf6c632-347f-4204-b72e-21967edd2976.png" width="257" style="border: 0; height: auto; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; max-width: 257px; padding-bottom: 0; vertical-align: bottom; display: inline;" class="mcnImage">
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; min-width: 100%; background-color: #FFB13D; table-layout: fixed;" bgcolor="#FFB13D">
                                      <tbody class="mcnDividerBlockOuter">
                                        <tr>
                                          <td class="mcnDividerBlockInner" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; min-width: 100%; padding: 18px;">
                                            <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; min-width: 100%;">
                                              <tbody>
                                                <tr>
                                                  <td style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                                                    <span></span>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <!-- <td class="mcnDividerBlockInner" style="padding: 18px;"><hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" /> -->
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" id="templateHeader" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #FFFFFF; background-image: none; background-repeat: no-repeat; background-position: center; background-size: cover; border-top: 0; border-bottom: 0; padding-top: 9px; padding-bottom: 0;" bgcolor="#FFFFFF" background="none">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; min-width: 100%;">
                                      <tbody class="mcnTextBlockOuter">
                                        <tr>
                                          <td valign="top" class="mcnTextBlockInner" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 9px;">
                                            <!--[if mso]>
                                            <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                                              <tr>
                                                <![endif]-->
                                                <!--[if mso]>
                                                <td valign="top" width="600" style="width:600px;">
                                                  <![endif]-->
                                                  <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; max-width: 100%; min-width: 100%;" width="100%" class="mcnTextContentContainer">
                                                    <tbody>
                                                      <tr>
                                                        <td valign="top" class="mcnTextContent" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; word-break: break-word; color: #202020; font-family: Helvetica; font-size: 16px; line-height: 150%; text-align: left; padding-top: 0; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;" align="left">
                                                          <h1 style="display: block; margin: 0; padding: 0; color: #202020; font-family: Helvetica; font-size: 16px; font-style: normal; font-weight: bold; line-height: 125%; letter-spacing: normal; text-align: center;">Contact Us</h1>
                                                          <p>
                                                            <b>Email pengirim</b>
                                                            <br/>' . $email . '
                                                          </p>
                                                          <p>
                                                            <b>Isi pesan</b>
                                                          </p>
                                                          <p>' . $pesan . '</p>
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                  <!--[if mso]>
                                                </td>
                                                <![endif]-->
                                                <!--[if mso]>
                                              </tr>
                                            </table>
                                            <![endif]-->
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" id="templateBody" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #FFFFFF; background-image: none; background-repeat: no-repeat; background-position: center; background-size: cover; border-top: 0; border-bottom: 2px solid #EAEAEA; padding-top: 0; padding-bottom: 9px;" bgcolor="#FFFFFF" background="none"></td>
                                </tr>
                                <tr>
                                  <td valign="top" id="templateFooter" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #FAFAFA; background-image: none; background-repeat: no-repeat; background-position: center; background-size: cover; border-top: 0; border-bottom: 0; padding-top: 9px; padding-bottom: 9px;" bgcolor="#FAFAFA" background="none">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; min-width: 100%; background-color: #29BAFD; table-layout: fixed;" bgcolor="#29BAFD">
                                      <tbody class="mcnDividerBlockOuter">
                                        <tr>
                                          <td class="mcnDividerBlockInner" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; min-width: 100%; padding: 10px 18px 25px;">
                                            <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; min-width: 100%; border-top: 2px none #EEEEEE;">
                                              <tbody>
                                                <tr>
                                                  <td style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                                                    <span></span>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <!-- <td class="mcnDividerBlockInner" style="padding: 18px;"><hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" /> -->
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; min-width: 100%;">
                                      <tbody class="mcnTextBlockOuter">
                                        <tr>
                                          <td valign="top" class="mcnTextBlockInner" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 9px;">
                                            <!--[if mso]>
                                            <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                                              <tr>
                                                <![endif]-->
                                                <!--[if mso]>
                                                <td valign="top" width="600" style="width:600px;">
                                                  <![endif]-->
                                                  <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; max-width: 100%; min-width: 100%;" width="100%" class="mcnTextContentContainer">
                                                    <tbody>
                                                      <tr>
                                                        <td valign="top" class="mcnTextContent" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; word-break: break-word; color: #656565; font-family: Helvetica; font-size: 12px; line-height: 150%; text-align: center; padding-top: 0; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;" align="center">
                                                          <em>Copyright © Illiyin Studio, All rights reserved.</em>
                                                          <br>
                                                            <br>
                                                              <strong>Our address is:</strong>
                                                              <br> Jagad Tour | #1 Biro Pariwisata Jawa Timur&nbsp;
                          
                                                                <br>
                                                                  <br> Dau Assakinah Residence No. 08,
                                                                        Banjartengah,
                                                                        Sumbersekar,
                                                                        Kec. Dau,
                                                                        Malang,
                                                                        Jawa Timur 65151 
                                                                  </td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                            <!--[if mso]>
                                                          </td>
                                                          <![endif]-->
                                                          <!--[if mso]>
                                                        </tr>
                                                      </table>
                                                      <![endif]-->
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                        <!--[if (gte mso 9)|(IE)]>
                                      </td>
                                    </tr>
                                  </table>
                                  <![endif]-->
                                  <!-- // END TEMPLATE -->
                                </td>
                              </tr>
                            </table>
                          </center>
                        </body>
              ';
        $mail->send();
      } else {
        echo '<p>Please enter valid data</p>';
      } 
      return redirect('/contact')->with('data', $data);       
    }
}
