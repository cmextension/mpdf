# mPDF Library Package for Joomla! CMS

## Requirements

* Joomla! 3+.
* mPDF requirements: [https://github.com/mpdf/mpdf](https://github.com/mpdf/mpdf).

## Installation

Download the package of the latest release on [https://github.com/cmextension/mpdf/releases](https://github.com/cmextension/mpdf/releases), install it with Joomla! Extension Manager just like any other Joomla! extensions.

## Usage

In your Joomla! extension's code:

```
jimport('mpdf.mpdf');

$html = '<h1>Hello World!</h1>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
```

Online manual of mPDF is available at [https://mpdf.github.io/](https://mpdf.github.io/).

## Development

* Clone this repository.
* Go to `mpdf` folder.
* Run `composer install` to install mPDF.

## License

GNU General Public License Version 2.