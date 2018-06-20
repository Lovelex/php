<?php
	
	$hierarquia = array(
		array(
			'nome_cargo' => 'CEO',
			'subordinados' => array(
				// Início: Diretor Comercial	
				array(
					'nome_cargo' => 'Diretor Comercial',
					'subordinados' => array(
						// Início: Gerente de Vendas	
						array(
							'nome_cargo' => 'Gerente de Vendas'
						)
						// Término: Diretor Gerente de Vendas	
					)
				),
				// Término: Diretor Comercial
				
				// Início: Diretor Financeiro
				array(
					'nome_cargo' => 'Diretor Financeiro',
					'subordinados' => array(
						// Inicio: Gerente de contas a pagar
						array(
							'nome_cargo' => 'Gerente de Contas a Pagar',
							'subordinados' =>array(
								// Inicio: Supervisor de Pagamentos
								array(
									'nome_cargo' => 'Supervisor de Pagamentos'
								)
							)
							// Término: Supervisor de Pagamentos
						),
						// Término: Gerente de contas a pagar
						
						// Início: Gerente de compras
						array(
							'nome_cargo' => 'Gerente de Compras',
							'subordinados' =>array(
								// Início: Supervisor de suprimentos
								array(
									'nome_cargo' => 'Supervisor de Suprimentos'
								)
								// Término: Supervisor de suprimentos
							)
						)
						// Término do gerente de compras	
					)
				)
				// Término: diretor Financeiro 

			)

		)
	);
	
	// Término: Do array Bi Dimensional

	function exibe($cargos){

		$html = '<ul>';

			foreach ($cargos as $cargo) {
				
				$html .= "<li>";

				$html .= $cargo ['nome_cargo'];

				if (isset($cargo['subordinados']) and count($cargo['subordinados']) > 0) {
					
					$html .= exibe($cargo ['subordinados']);
				}

				$html .= "</li>";
			}

		$html .= "</ul>";

		return $html;

	}

	echo exibe($hierarquia);
	var_dump($hierarquia);
 ?>