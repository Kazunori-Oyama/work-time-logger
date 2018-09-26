<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">
		<form id="search" name="search" method="GET" action="/">
			<table>
				<tbody>
					<tr>
						<td class="pl-2 pr-2"><div class="input-group mb-3">
	  <div class="input-group-prepend">
<label class="input-group-text" for="inputGroupSelect01">Year</label>
  </div>
	  <select class="custom-select" id="inputGroupSelect01" name="year">
	  <option value="">Ignore</option>
				<option value="2019">2019</option>
				<option value="2018">2018</option>
	  </select>
</div></td>
						<td class="pl-2 pr-2">
						<div class="input-group mb-3">
	  <div class="input-group-prepend">
<label class="input-group-text" for="inputGroupSelect02">month</label>
  </div>
	  <select class="custom-select" id="inputGroupSelect02" name="monthnum">
		  <option value="">Ignore</option>
		  <?php for($i=1; $i<=12; $i++):?>
		<option value="<?php echo $i;?>"><?php echo $i;?></option>
			<?php endfor;?>
	  </select>
</div></td>
						<td class="pl-2 pr-2">
						<div class="input-group mb-3">
	  <div class="input-group-prepend">
<label class="input-group-text" for="inputGroupSelect02">day</label>
  </div>
	  <select class="custom-select" id="inputGroupSelect02" name="day">
		  <option value="">Ignore</option>
		  <?php for($i=1; $i<=31; $i++):?>
			  <option value="<?php echo $i;?>"><?php echo $i;?></option>
			<?php endfor;?>
	  </select>
</div></td>
						<td class="pl-2 pr-2">
						<div class="input-group mb-3">
	  <div class="input-group-prepend">
<label class="input-group-text" for="inputGroupSelect03">Type</label>
  </div>
	  <select class="custom-select" id="inputGroupSelect03" name="post_type">
				<option value="log">Logs</option>
				<option value="p">Report</option>
	  </select>
</div></td>
						<td class="pl-2 pr-2"><div class="input-group mb-3">
	  <div class="input-group-prepend">
<label class="input-group-text" for="inputGroupSelect03">project</label>
  </div>
	  <select class="custom-select" id="inputGroupSelect03" name="project">
				<option value="">Ignore</option>
				<?php $terms = get_terms('project');
				foreach ( $terms as $term ) {
					echo  '<option value="'.esc_html($term->slug).'">'; 
					echo esc_html($term->name);
					echo '</option>';
				};
				?>
	  </select>
</div></td>
<td class="pl-2 pr-2"><div class="input-group mb-3">
	  <div class="input-group-prepend">
<label class="input-group-text" for="inputGroupSelect03">Step</label>
  </div>
	  <select class="custom-select" id="inputGroupSelect03" name="step">
				<option value="">Ignore</option>
				<?php $terms = get_terms('step');
				foreach ( $terms as $term ) {
					echo  '<option value="'.esc_html($term->slug).'">'; 
					echo esc_html($term->name);
					echo '</option>';
				};
				?>
	  </select>
</div></td>
<td class="pl-2 pr-2">
<div class="input-group mb-3">
	  <div class="input-group-prepend">
<label class="input-group-text" for="inputGroupSelect03">staff</label>
</div>
	  <select class="custom-select" id="inputGroupSelect03" name="author">
				<option value="">Ignore</option>
<?php
$stuffs = get_users();
// WP_User オブジェクトの配列。
foreach ( $stuffs as $stuff ) {
	echo '<option value="'.esc_html( $stuff->ID ).'">' . esc_html( $stuff->display_name ) . '</oprion>';
}?></td>
						<td><input class="btn btn-success mb-3" type="submit" value="Submit"></td>
					</tr>
				</tbody>
			</table>
			</form>