<?php
/**
 * Notifications configure meta box.
 *
 * @since 3.1.1
 * @package Hummingbird
 */

use Hummingbird\Core\Utils;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="sui-box-body">
	<p><?php esc_html_e( 'Activate and schedule notifications and reports in one place. Automate your workflow with daily, weekly or monthly reports sent directly to your inbox.', 'wphb' ); ?></p>
</div>

<div class="sui-box-settings-row sui-disabled">
	<table class="sui-table sui-table-flushed">
		<thead>
		<tr>
			<th><?php esc_html_e( 'Notifications', 'wphb' ); ?></th>
			<th class="sui-hidden-xs"><?php esc_html_e( 'Type', 'wphb' ); ?></th>
			<th class="sui-hidden-xs"><?php esc_html_e( 'Status', 'wphb' ); ?></th>
			<th class="sui-hidden-xs"><?php esc_html_e( 'Recipients', 'wphb' ); ?></th>
			<th><?php esc_html_e( 'Schedule', 'wphb' ); ?></th>
		</tr>
		</thead>

		<tbody>
		<tr>
			<td class="sui-table-item-title">
				<span class="sui-icon-calendar sui-hidden-xs" aria-hidden="true"></span>
				<?php esc_html_e( 'Performance Test', 'wphb' ); ?>
			</td>
			<td class="sui-hidden-xs"><?php esc_html_e( 'Reporting', 'wphb' ); ?></td>
			<td class="sui-hidden-xs"><span class="sui-tag sui-tag-purple sui-tag-sm"><?php esc_html_e( 'Pro', 'wphb' ); ?></span></td>
			<td colspan="2"><?php esc_html_e( 'Schedule performance tests and receive customized results by email.', 'wphb' ); ?></td>
		</tr>
		<tr>
			<td class="sui-table-item-title">
				<span class="sui-icon-mail sui-hidden-xs" aria-hidden="true"></span>
				<?php esc_html_e( 'Uptime', 'wphb' ); ?>
			</td>
			<td class="sui-hidden-xs"><?php esc_html_e( 'Notification', 'wphb' ); ?></td>
			<td class="sui-hidden-xs"><span class="sui-tag sui-tag-purple sui-tag-sm"><?php esc_html_e( 'Pro', 'wphb' ); ?></span></td>
			<td colspan="2"><?php esc_html_e( 'Receive an email when this website is unavailable.', 'wphb' ); ?></td>
		</tr>
		<tr>
			<td class="sui-table-item-title">
				<span class="sui-icon-calendar sui-hidden-xs" aria-hidden="true"></span>
				<?php esc_html_e( 'Uptime', 'wphb' ); ?>
			</td>
			<td class="sui-hidden-xs"><?php esc_html_e( 'Reporting', 'wphb' ); ?></td>
			<td class="sui-hidden-xs"><span class="sui-tag sui-tag-purple sui-tag-sm"><?php esc_html_e( 'Pro', 'wphb' ); ?></span></td>
			<td colspan="2"><?php esc_html_e( 'Schedule uptime reports and receive results by email.', 'wphb' ); ?></td>
		</tr>
		<tr>
			<td class="sui-table-item-title">
				<span class="sui-icon-mail sui-hidden-xs" aria-hidden="true"></span>
				<?php esc_html_e( 'Database Cleanup', 'wphb' ); ?>
			</td>
			<td class="sui-hidden-xs"><?php esc_html_e( 'Reporting', 'wphb' ); ?></td>
			<td class="sui-hidden-xs"><span class="sui-tag sui-tag-purple sui-tag-sm"><?php esc_html_e( 'Pro', 'wphb' ); ?></span></td>
			<td colspan="2"><?php esc_html_e( 'Schedule database cleanups and receive results by email.', 'wphb' ); ?></td>
		</tr>
		</tbody>
	</table>
</div>

<div class="sui-box-settings-row sui-upsell-row">
	<div class="sui-upsell-notice__content">
		<div class="sui-notice sui-notice-purple">
			<div class="sui-notice-content">
				<div class="sui-notice-message">
					<span class="sui-notice-icon sui-icon-info sui-md" aria-hidden="true"></span>
					<p>
						<?php esc_html_e( 'Stay on top of potential performance issues with scheduled automatic reports, sent directly to your inbox. Get reports as part of a WPMU DEV membership. Unlock now with Pro.', 'wphb' ); ?>
						<br/>
						<a href="<?php echo esc_url( Utils::get_link( 'plugin', 'notifications' ) ); ?>" class="sui-button sui-button-purple" style="margin-top: 10px" target="_blank" onclick="window.wphbMixPanel.trackHBUpsell( 'notifications', 'notifications_page', 'cta_clicked', this.href, 'hb_notifications_upsell' );">
							<?php esc_html_e( 'Upgrade to Pro', 'wphb' ); ?>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
