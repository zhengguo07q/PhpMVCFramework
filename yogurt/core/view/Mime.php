<?php
/**
 *  Yogurt : MVC Development Framework with PHP<http://www.yogurtframework.com/>
 *
 * @author          rick <158672319@qq.com>
 * @copyright		Copyright (c)2009-2013  
 * @link			http://www.yogurtframework.com
 * @license         http://www.yogurtframework.com/license/
 */
 /**
 * Mime type class of yogurt framework.
 * @filesource		yogurt/core/view/Mime.php
 * @since			Yogurt v 0.9
 * @version			$3.0
 */
class Mime {
	private static $genericMimeArray = array(
								'html' => 'text/html', 
								'xml'	=>	'application/xml',
								'xhtml'	=>	'application/xhtml+xml',
								'text'	=>	'text/plain',
								'jpe'	=>	'image/jpeg',
								'jpeg'	=>	'image/jpeg',
								'jpg'	=>	'image/jpeg',
								'js'	=>	'text/javascript',
								'css'	=>	'text/css',
								'wml'	=>	'text/vnd.wap.wml',
								'wmlc'	=>	'application/vnd.wap.wmlc',
								'wmls'	=>	'text/vnd.wap.wmlscript',
								'wmlscriptc'	=>	'application/vnd.wap.wmlscriptc',
								'gz'	=>	'application/x-gzip',
								'zip'	=>	'application/zip',
								'xls'	=>	'application/vnd.ms-excel',
								'pdf'	=>	'application/pdf',
								'ppt'	=>	'application/vnd.ms-powerpoint',
								'doc'	=>	'application/vnd.ms-word',
								'mp3'	=>	'audio/x-mpeg',
								'midi'	=>	'audio/x-midi');
	/**
	 * construct of Mime
	 */
    public function Mime() {
    }
    
    /**
     * get Mime type
     * @param string $extension
     * @return string
     */
    public static function getMimeType($extension = "html") {
    	if (array_key_exists($extension, self::$genericMimeArray)) {
    		return self::$genericMimeArray[$extension];
    	} else {    		
    		$mimeTypeArray = MimeType::$mimeArray;
    		return array_key_exists($extension, $mimeTypeArray) ? $mimeTypeArray[$extension] : "text/html";
    	}
    	
    	
    }
}

class MimeType {
	public static $mimeArray = array(
					'abs'	=>	'audio/x-mpeg',
					'ai'	=>	'application/postscript',
					'aif'	=>	'audio/x-aiff',
					'aifc'	=>	'audio/x-aiff',
					'aiff'	=>	'audio/x-aiff',
					'aim'	=>	'application/x-aim',
					'art'	=>	'image/x-jg',
					'asf'	=>	'video/x-ms-asf',
					'asx'	=>	'video/x-ms-asf',
					'au'	=>	'audio/basic',
					'avi'	=>	'video/x-msvideo',
					'avx'	=>	'video/x-rad-screenplay',
					'bcpio'	=>	'application/x-bcpio',
					'bin'	=>	'application/octet-stream',
					'bmp'	=>	'image/bmp',
					'body'	=>	'text/html',
					'cdf'	=>	'application/x-cdf',
					'cer'	=>	'application/x-x509-ca-cert',
					'class'	=>	'application/java',
					'cpio'	=>	'application/x-cpio',
					'csh'	=>	'application/x-csh',
					'css'	=>	'text/css',
					'dib'	=>	'image/bmp',
					'doc'	=>	'application/vnd.ms-word',
					'dtd'	=>	'application/xml-dtd',
					'dv'	=>	'video/x-dv',
					'dvi'	=>	'application/x-dvi',
					'eps'	=>	'application/postscript',
					'etx'	=>	'text/x-setext',
					'exe'	=>	'application/octet-stream',
					'gif'	=>	'image/gif',
					'gtar'	=>	'application/x-gtar',
					'gz'	=>	'application/x-gzip',
					'hdf'	=>	'application/x-hdf',
					'hqx'	=>	'application/mac-binhex40',
					'htc'	=>	'text/x-component',
					'htm'	=>	'text/html',
					'html'	=>	'text/html',
					'ief'	=>	'image/ief',
					'jad'	=>	'text/vnd.sun.j2me.app-descriptor',
					'jar'	=>	'application/java-archive',
					'java'	=>	'text/plain',
					'jnlp'	=>	'application/x-java-jnlp-file',
					'jpe'	=>	'image/jpeg',
					'jpeg'	=>	'image/jpeg',
					'jpg'	=>	'image/jpeg',
					'js'	=>	'text/javascript',
					'jsf'	=>	'text/plain',
					'jspf'	=>	'text/plain',
					'kar'	=>	'audio/x-midi',
					'latex'	=>	'application/x-latex',
					'm3u'	=>	'audio/x-mpegurl',
					'mac'	=>	'image/x-macpaint',
					'man'	=>	'application/x-troff-man',
					'mathml' =>'application/mathml+xml',
					'me'	=>	'application/x-troff-me',
					'mid'	=>	'audio/x-midi',
					'midi'	=>	'audio/x-midi',
					'mif'	=>	'application/x-mif',
					'mov'	=>	'video/quicktime',
					'movie'	=>	'video/x-sgi-movie',
					'mp1'	=>	'audio/x-mpeg',
					'mp2'	=>	'audio/x-mpeg',
					'mp3'	=>	'audio/x-mpeg',
					'mpa'	=>	'audio/x-mpeg',
					'mpe'	=>	'video/mpeg',
					'mpeg'	=>	'video/mpeg',
					'mpega'	=>	'audio/x-mpeg',
					'mpg'	=>	'video/mpeg',
					'mpv2'	=>	'video/mpeg2',
					'ms'	=>	'application/x-wais-source',
					'nc'	=>	'application/x-netcdf',
					'oda'	=>	'application/oda',
					'odb'	=>	'application/vnd.oasis.opendocument.database',
					'odc'	=>	'application/vnd.oasis.opendocument.chart',
					'odf'	=>	'application/vnd.oasis.opendocument.formula',
					'odg'	=>	'application/vnd.oasis.opendocument.graphics',
					'odi'	=>	'application/vnd.oasis.opendocument.image',
					'odm'	=>	'application/vnd.oasis.opendocument.text-master',
					'odp'	=>	'application/vnd.oasis.opendocument.presentation',
					'ods'	=>	'application/vnd.oasis.opendocument.spreadsheet',
					'odt'	=>	'application/vnd.oasis.opendocument.text',
					'ogg'	=>	'application/ogg',
					'otg'	=>	'application/vnd.oasis.opendocument.graphics-template',
					'oth'	=>	'application/vnd.oasis.opendocument.text-web',
					'otp'	=>	'application/vnd.oasis.opendocument.presentation-template',
					'ots'	=>	'application/vnd.oasis.opendocument.spreadsheet-template ',
					'ott'	=>	'application/vnd.oasis.opendocument.text-template',
					'pbm'	=>	'image/x-portable-bitmap',
					'pct'	=>	'image/pict',
					'pdf'	=>	'application/pdf',
					'pgm'	=>	'image/x-portable-graymap',
					'pic'	=>	'image/pict',
					'pict'	=>	'image/pict',
					'pls'	=>	'audio/x-scpls',
					'png'	=>	'image/png',
					'pnm'	=>	'image/x-portable-anymap',
					'pnt'	=>	'image/x-macpaint',
					'ppm'	=>	'image/x-portable-pixmap',
					'ppt'	=>	'application/vnd.ms-powerpoint',
					'ps'	=>	'application/postscript',
					'psd'	=>	'image/x-photoshop',
					'qt'	=>	'video/quicktime',
					'qti'	=>	'image/x-quicktime',
					'qtif'	=>	'image/x-quicktime',
					'ras'	=>	'image/x-cmu-raster',
					'rdf'	=>	'application/rdf+xml',
					'rgb'	=>	'image/x-rgb',
					'rm'	=>	'application/vnd.rn-realmedia',
					'roff'	=>	'application/x-troff',
					'rtf'	=>	'application/rtf',
					'rtx'	=>	'text/richtext',
					'sh'	=>	'application/x-sh',
					'shar'	=>	'application/x-shar',
					'shtml'	=>	'text/x-server-parsed-html',
					'smf'	=>	'audio/x-midi',
					'sit'	=>	'application/x-stuffit',
					'snd'	=>	'audio/basic',
					'src'	=>	'application/x-wais-source',
					'sv4cpio'	=>	'application/x-sv4cpio',
					'sv4crc'	=>	'application/x-sv4crc',
					'swf'	=>	'application/x-shockwave-flash',
					't'	=>	'application/x-troff',
					'tar'	=>	'application/x-tar',
					'tcl'	=>	'application/x-tcl',
					'tex'	=>	'application/x-tex',
					'texi'	=>	'application/x-texinfo',
					'texinfo'	=>	'application/x-texinfo',
					'tif'	=>	'image/tiff',
					'tiff'	=>	'image/tiff',
					'tr'	=>	'application/x-troff',
					'tsv'	=>	'text/tab-separated-values',
					'txt'	=>	'text/plain',
					'ulw'	=>	'audio/basic',
					'ustar'	=>	'application/x-ustar',
					'vxml'	=>	'application/voicexml+xml',
					'xbm'	=>	'image/x-xbitmap',
					'xht'	=>	'application/xhtml+xml',
					'xhtml'	=>	'application/xhtml+xml',
					'xml'	=>	'application/xml',
					'xpm'	=>	'image/x-xpixmap',
					'xsl'	=>	'application/xml',
					'xslt'	=>	'application/xslt+xml',
					'xul'	=>	'application/vnd.mozilla.xul+xml',
					'xwd'	=>	'image/x-xwindowdump',
					'wav'	=>	'audio/x-wav',
					'svg'	=>	'image/svg+xml',
					'svgz'	=>	'image/svg+xml',
					'vsd'	=>	'application/x-visio',
					'wbmp'	=>	'image/vnd.wap.wbmp',
					'wml'	=>	'text/vnd.wap.wml',
					'wmlc'	=>	'application/vnd.wap.wmlc',
					'wmls'	=>	'text/vnd.wap.wmlscript',
					'wmlscriptc'	=>	'application/vnd.wap.wmlscriptc',
					'wrl'	=>	'x-world/x-vrml',
					'Z'	=>	'application/x-compress',
					'z'	=>	'application/x-compress',
					'zip'	=>	'application/zip',
					'xls'	=>	'application/vnd.ms-excel'
					);
}
?>