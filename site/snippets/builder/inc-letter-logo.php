
                    <?php if($page->parent()->letter_logo()->isNotEmpty()): ?>
                    <?php $image = $page->parent()->letter_logo(); ?>
                    <!-- Module -->
                    <!-- Newsletter logo -->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr><td class="imageContent" align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <img src="<?= $page->parent()->url() . '/' . $image ?>" width="200px" class="flexibleImage" style="max-width:200px;" />
                    </td></tr>
                    </table>
                    <?php endif; ?>
                    <!-- Module -->
                    <!-- Newsletter informations -->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr><td class="textContent" align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <p class="" style="text-align:center; text-transform:uppercase; color:#999999; letter-spacing:3px; font-size:12px;">
                    <strong><?= $page->parent()->letter_name()->h() ?></strong> // <?= $page->date('d-m-Y') ?></p>
                    </td></tr>
                    </table>
