<?php /* Smarty version 2.6.18, created on 2014-05-14 11:19:06
         compiled from ExportRecords.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'ExportRecords.tpl', 20, false),)), $this); ?>

<script type="text/javascript" src="include/js/general.js"></script>

<!-- header - level 2 tabs -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Buttons_List1.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
	<tr>
   		<td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
" /></td>
   		<td class="showPanelBg" valign="top" width="100%">
   			<table  cellpadding="0" cellspacing="0" width="100%" border=0>
    				<tr>
 					<td width="50%" valign=top>
						<form  name="Export_Records"  method="POST" onsubmit="VtigerJS_DialogBox.block();">
							<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['MODULE']; ?>
">
							<input type="hidden" name="action" value="Export">
							<input type="hidden" name="idstring" value="<?php echo $this->_tpl_vars['IDSTRING']; ?>
">
							<input type="hidden" name="id_cur_str" value="<?php echo $this->_tpl_vars['IDCURSTR']; ?>
">
							<table align="center" cellpadding="15" cellspacing="0" width="85%" class="mailClient importLeadUI small" border="0">
								<tr>
									<td colspan="2" valign="middle" align="left" class="mailClientBg  genHeaderSmall"><?php echo $this->_tpl_vars['MODULELABEL']; ?>
 >> <?php echo $this->_tpl_vars['APP']['LBL_EXPORT']; ?>
 </td>
									<br>
								</tr>
								<tr>
  									<td border="0" cellpadding="5" cellspacing="0" width="50%">
	 									<table>
			   								<tr>
			       									<td colspan="2" align="left" valign="top" style="padding-left:40px;">
		    	       										<span class="genHeaderSmall"><?php echo $this->_tpl_vars['APP']['LBL_SEARCH_CRITERIA_RECORDS']; ?>
:</span>
												</td>
			   								</tr>
		  	   								<tr>
												<?php if ($this->_tpl_vars['SESSION_WHERE'] != ''): ?>
												<td align="right" valign="top" width="50%" class=small><?php echo $this->_tpl_vars['APP']['LBL_WITH_SEARCH']; ?>
</td>
												<td  align="left" valign="top" width="5%" class=small>
													<input type="radio" name="search_type" checked value="includesearch">
												</td>
												<?php else: ?>
												<td align="right" valign="top" width="50%" class=small><?php echo $this->_tpl_vars['APP']['LBL_WITH_SEARCH']; ?>
</td>
												<td  align="left" valign="top" width="5%" class=small>
													<input type="radio" name="search_type"  value="includesearch">
												</td>
												<?php endif; ?>
			   								</tr>
											<tr>
												<?php if ($this->_tpl_vars['SESSION_WHERE'] == ''): ?>
												<td align="right" valign="top" width="50%" class=small><?php echo $this->_tpl_vars['APP']['LBL_WITHOUT_SEARCH']; ?>
</td>	
												<td align="left" valign="top" width="5%" class=small>
	                 										<input type="radio" name="search_type" checked value="withoutsearch">
												</td>
												<?php else: ?>
												<td align="right" valign="top" width="50%" class=small><?php echo $this->_tpl_vars['APP']['LBL_WITHOUT_SEARCH']; ?>
</td>	
												<td align="left" valign="top" width="5%" class=small>
	                 										<input type="radio" name="search_type" value="withoutsearch">
												</td>
												<?php endif; ?>
			   								</tr>
			   								<tr>
												<td colspan="2" align="left" valign="top" style="padding-left:40px;">
													<span class="genHeaderSmall"><?php echo $this->_tpl_vars['APP']['LBL_EXPORT_RECORDS']; ?>
:</span>
												</td>
			   								</tr>
			   								<tr>
												<?php if ($this->_tpl_vars['IDSTRING'] == ''): ?>
												<td align="right" valign="top" width="50%" class=small><?php echo $this->_tpl_vars['APP']['LBL_ALL_DATA']; ?>
</td>
												<td align="left" valign="top" width="5%" class=small>
													<input type="radio" name="export_data" checked value="all">
												</td>
												<?php else: ?>
												<td align="right" valign="top" width="50%" class=small><?php echo $this->_tpl_vars['APP']['LBL_ALL_DATA']; ?>
</td>
												<td align="left" valign="top" width="5%" class=small>
													<input type="radio" name="export_data"  value="all">
												</td>
												<?php endif; ?>
			   								</tr>
			   								<tr>
			        								<td align="right" valign="top" width="50%" class=small ><?php echo $this->_tpl_vars['APP']['LBL_DATA_IN_CURRENT_PAGE']; ?>
</td>
												<td align="left" valign="top" width="5%" class=small>
													<input type="radio" name="export_data" value="currentpage">
												</td>
			   								</tr>
			   								<tr>
												<?php if ($this->_tpl_vars['IDSTRING'] != ''): ?>
		   	       									<td align="right" valign="top" width="50%" class=small ><?php echo $this->_tpl_vars['APP']['LBL_ONLY_SELECTED_RECORDS']; ?>
</td>
		   										<td align="left" valign="top" width="5%" class=small>
		   											<input type="radio" name="export_data" checked value="selecteddata">
												</td>
												<?php else: ?>
												<td align="right" valign="top" width="50%" class=small ><?php echo $this->_tpl_vars['APP']['LBL_ONLY_SELECTED_RECORDS']; ?>
</td>
		   										<td align="left" valign="top" width="5%" class=small>
		   											<input type="radio" name="export_data"  value="selecteddata">
												</td>
												<?php endif; ?>
		   									</tr>
										</table>
									</td>
									<td border="0" cellpadding="5" cellspacing="0" width="50%">
										<table >
											<tr>		
												<td><div id="not_search" style="position:absolute;display:none;width:400px;height:25px;"></div></td>
											</tr>
										</table>
									</td>	
								</tr>
								<tr>
									<td align="center" colspan="2" border=0 cellspacing=0 cellpadding=5 width=98% class="layerPopupTransport">	
										<input type="button" name="<?php echo $this->_tpl_vars['APP']['LBL_EXPORT']; ?>
" value="<?php echo $this->_tpl_vars['APP']['LBL_EXPORT']; ?>
 <?php echo $this->_tpl_vars['MODULELABEL']; ?>
 " class="crmbutton small create" onclick="record_export('<?php echo $this->_tpl_vars['MODULELABEL']; ?>
','<?php echo $this->_tpl_vars['CATEGORY']; ?>
',this.form,'<?php echo $_REQUEST['idstring']; ?>
')"/>&nbsp;&nbsp;
                								<input type="button" name="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" value=" <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
 " class="crmbutton small cancel" onclick="window.history.back()" />
									</td>
								</tr>
							</table>
						</form>
					</td>
				</tr>
			</table>
		</td>
		<td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
" /></td>
	</tr>
</table>
