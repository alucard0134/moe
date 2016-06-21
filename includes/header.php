<!DOCTYPE html><html><head><title>Mod</title>
                    <style>
                    table,th,td{border:1px solid black; border-collapse:collapse;}
                th,td{padding:5px;}
                </style></head><body>
                    <p>Keep in mind that this is a alpha version of the mod panel, click <a href="'.MOE_URL.'/includes/api.php?do=logout">here</a> to logout or <a href="'.MOE_URL.'/panel" target="_BLANK">here</a> to go to the panel for your personal account.</p>
                    <form action="'.MOE_URL.'/includes/api.php" method="get">
                    <input type="hidden" name="do" value="mod">
                    <input type="hidden" name="action" value="fetch">
                    Date: <input type="text" name="date" value="'.date('Y-m-d').'">
                    Amount: <input type="text" name="count" value="30">
                    Keyword: <input type="text" name="keyword">
                    <input type="submit" value="fetch">
                    </form><br>
                    <table id="result" style="width:100%">
                    <tr><th>ID</th><th>Orginal Name</th><th>Filename</th><th>Size (bytes)</th><th>Action</th></tr>
