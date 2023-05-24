<?php namespace App\Services;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Exel{

public static function toArray($file):?array{
    $spreadsheet = IOFactory::load($file);
    $rows = $spreadsheet->getActiveSheet()->toArray();
    array_walk_recursive($rows, function(&$item, $key){$item = str_replace('#NULL!', '', $item);});
    //array_map(static fn (string $v) => $v === '#NULL!' ? null : $v, $rows);
return $rows;}
public static function toHtml($file):?string{
    $spreadsheet = IOFactory::load($file);
    $rows = IOFactory::createWriter($spreadsheet, 'Html');

    ob_start();
    ///*/ include_once(dirname(dirname($page)).'/container.phtml'); ///*/
    $rows->save('php://output');
    $page_content = ob_get_contents();
    ob_end_clean();
    
return $page_content;}
}