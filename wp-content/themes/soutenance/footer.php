    <footer>
      <div class="footer-row">
        <img src="<?= get_theme_mod("soutenance_logo-bis") ?>" alt="" srcset="">
        <div class="team-footer">
          <div class="team-member">
            <span class="member-name">Manager</span>
            <span class="member-contact"><?= get_theme_mod("phone_manager") ?></span>
            <span class="member-contact"><?= get_theme_mod("email_manager") ?></span>
          </div>
          <div class="team-member">
            <span class="member-name">CEO</span>
            <span class="member-contact"><?= get_theme_mod("phone_ceo") ?></span>
            <span class="member-contact"><?= get_theme_mod("email_ceo") ?></span>
          </div>
        </div>
      </div>
      <div class="footer-row">
        <span><?= get_theme_mod("soutenance_copyright") ?></span>
        <div class="links">
          <a href="<?= get_theme_mod("soutenance_facebook") ?>"><svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.99609 20V11.0547H0V7.5H2.99609V4.69922C2.99609 1.65625 4.85547 0 7.57031 0C8.87109 0 9.98828 0.0976562 10.3125 0.140625V3.32031H8.42969C6.95312 3.32031 6.66797 4.02344 6.66797 5.05078V7.5H10L9.54297 11.0547H6.66797V20" fill="white" />
            </svg></a>
          <a href="<?= get_theme_mod("soutenance_linkedin") ?>"><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.40179 4.82589C1.07589 4.82589 0 3.72768 0 2.40179C0 1.07589 1.07589 0 2.40179 0C3.72768 0 4.80357 1.07589 4.80357 2.40179C4.80357 3.72768 3.72768 4.82589 2.40179 4.82589ZM4.47768 20H0.330357V6.64732H4.47768V20ZM15.8616 20H20H20.0045V12.6652C20.0045 9.07589 19.2321 6.3125 15.0357 6.3125C13.0179 6.3125 11.6652 7.41964 11.1116 8.46875H11.0536V6.64732H7.07589V20H11.2188V13.3884C11.2188 11.6473 11.5491 9.96429 13.7054 9.96429C15.8304 9.96429 15.8616 11.9509 15.8616 13.5V20Z" fill="white" />
            </svg></a>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>