<?php $this->layout('base', ['pageTitle' => $this->t('Approve Application')]); ?>
<?php $this->start('content'); ?>
    <h1><?=$this->t('Approve Application'); ?></h1>

    <p>
<?=$this->t('An application attempts to establish a VPN connection.'); ?>
    </p>

<?php if ('org.eduvpn.app.windows' === $client_id || 'org.letsconnect-vpn.app.windows' === $client_id): ?>
    <span class="Windows"><?=$this->e($display_name); ?></span>
<?php elseif ('org.eduvpn.app.macos' === $client_id || 'org.letsconnect-vpn.app.macos' === $client_id): ?>
    <span class="macOS"><?=$this->e($display_name); ?></span>
<?php elseif ('org.eduvpn.app.android' === $client_id || 'org.letsconnect-vpn.app.android' === $client_id): ?>
    <span class="Android"><?=$this->e($display_name); ?></span>
<?php elseif ('org.eduvpn.app.ios' === $client_id || 'org.letsconnect-vpn.app.ios' === $client_id): ?>
    <span class="iOS"><?=$this->e($display_name); ?></span>
<?php elseif ('org.eduvpn.app.linux' === $client_id || 'org.letsconnect-vpn.app.linux' === $client_id): ?>
    <span class="Linux"><?=$this->e($display_name); ?></span>
<?php else: ?>
    <p>
<?php if (null === $display_name): ?>
        <strong><?=$this->e($client_id); ?></strong>
<?php else: ?>
        <strong><?=$this->e($display_name); ?></strong>
<?php endif; ?>
    </p>
<?php endif; ?>

	<p class="warning">
<?=$this->t('Only approve this when you are trying to establish a VPN connection with this application!'); ?>
	</p>

    <details>
        <summary>
<?=$this->t('Why is this necessary?'); ?>
        </summary>
        <p>
<?=$this->t('To prevent malicious applications from secretly establishing a VPN connection on your behalf, you have to explicitly approve this application first.'); ?>
        </p>
    </details>

    <form class="frm" method="post">
        <fieldset>
            <button type="submit" name="approve" value="yes"><?=$this->t('Approve Application'); ?></button>
        </fieldset>
    </form>
<?php $this->stop('content'); ?>
