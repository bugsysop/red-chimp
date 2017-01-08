
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                <tr><td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" height="400px"  style="margin-bottom:40px; margin-top: 20px; background-image: url('<?= $page->image($data->picture())->url() ?>'); background-repeat: no-repeat; background-size:cover !important; border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tr><td align="center" valign="middle" class="textContent" style="padding:20px;">

                        <h1 style="font-family:<?= $data->text_font() ?>; font-size: 20px; line-height: 150%;color:<?= $data->text_color() ?>;  text-align: center;"> <?= $data->text() ?> </h1></a>
                        <?php if ($data->link_url()->isNotEmpty()): ?>
                        <a href="<?= $data->link_url() ?>" style="color:<?= $data->text_color() ?>; text-decoration:none;">
                        <h4 style="color:<?= $data->text_color() ?>; text-decoration:none; font-weight:normal; font-size:13px; text-transform:uppercase; line-height:300%; text-align: center;">
                        <?= $data->link_text()->h() ?>&nbsp;&rarr;</h4></a>
                        <?php endif ?>

                    </td></tr>
                    </table>
                </td></tr>
                </table>
