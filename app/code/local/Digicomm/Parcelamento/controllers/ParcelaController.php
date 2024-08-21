<?php
class Digicomm_Parcelamento_ParcelaController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        $valor = $this->getRequest()->getPost('valor');
        $valorFormatado = str_replace(array("R$", ".", ","), "", $valor);
        $valor = (float) $valorFormatado / 100;
        $max_parcelas = 15;
        $desconto_boleto = 0.8; // 20% de desconto
        $cartao = $valor / $max_parcelas;
        $boleto = $valor * $desconto_boleto;
        
        echo '<font style="color: #656565;"><b>Por:</b></font>';
        echo '<font style="font-size: 14px; font-weight: bold; color: #656565;"> R$' . number_format($valor, 2, ',', '.') . '</font>';
        echo '<br/>';
        echo '<font style="color: #656565;"><b>em</b></font>';
        echo '<font style="font-size: 16px; font-weight: bold; color: #156EAF;">15x</font>';
        echo '<font style="color: #656565;"><b>de</b></font>';
        echo '<strong><font style="font-size: 16px; font-weight: bold; color: #156EAF;"> R$' . number_format($cartao, 2, ',', '.') . '</font></strong>';
        echo '<font style="color: #656565;"><b>sem juros no cartão.</b></font>';
        echo '<br/>';
        echo '<font style="color: #656565;"><b>ou</b></font>';
        echo '<font style="font-size: 16px; font-weight: bold; color: #156EAF;"> R$' . number_format($boleto, 2, ',', '.') . '</font>';
        echo '<font style="color: #656565;"><b>à vista com</b></font>';
        echo '<font style="color: #CF1919; font-size: 14px;"><b>20%</b> de desconto no boleto</font>';
    }
}
