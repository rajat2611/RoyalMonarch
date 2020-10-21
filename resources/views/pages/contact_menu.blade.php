<div class="nav flex-column nav-pills about-sidebar" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link  <?php echo request()->is('firm') ? 'active' : ''; ?>" id="v-pills-home-tab" href="/firm" role="tab"><h5>Our Firm <?php echo request()->is('firm') ? '>' : ''; ?></h5></a>
    <a class="nav-link  <?php echo request()->is('culture') ? 'active' : ''; ?>" id="v-pills-profile-tab" href="/culture"><h5>Our Culture <?php echo request()->is('culture') ? '>' : ''; ?></h5></a>
    <a class="nav-link  <?php echo request()->is('approach') ? 'active' : ''; ?>" id="v-pills-messages-tab" href="/approach"><h5>Our Approach <?php echo request()->is('approach') ? '>' : ''; ?></h5></a>
    <a class="nav-link  <?php echo request()->is('team') ? 'active' : ''; ?>" id="v-pills-settings-tab"href="/team"><h5>Our Team <?php echo request()->is('team') ? '>' : ''; ?></h5></a>
</div>