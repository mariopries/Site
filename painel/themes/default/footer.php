<?php if (!defined('FLUX_ROOT')) exit; ?>
							</td>
							<td bgcolor="#f5f5f5"></td>
						</tr>

						<tr>
							<td><img src="<?php echo $this->themePath('img/content_bl.gif') ?>" style="display: block" /></td>
							<td bgcolor="#f5f5f5"></td>
							<td><img src="<?php echo $this->themePath('img/content_br.gif') ?>" style="display: block" /></td>
						</tr>
					</table>
				</td>
				<!-- Spacing between content and horizontal end-of-page -->
				<td style="padding: 10px"></td>
			</tr>
			<?php if (Flux::config('ShowCopyright')): ?>
			<tr>
				<td colspan="3"></td>
				<td id="copyright">
					<p>

					</p>
				</td>
				<td></td>
			</tr>
			<?php endif ?>
			<?php if (Flux::config('ShowRenderDetails')): ?>
			<tr>
				<td colspan="3"></td>
				<td id="info">
					<p>
Painel de controle CoBrasil & MegaMixRo | 2017
					</p>
				</td>
				<td></td>
			</tr>
			<?php endif ?>
		</table>
	</body>
</html>
