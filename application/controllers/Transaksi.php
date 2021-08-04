<?php

class Transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MCart');
		$this->load->model('MAnggota');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation', 'cart');
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$data['judul'] = 'Transaksi';
		$data['transaksi'] = $this->MCart->get_all_produk();
		$this->load->view('templates/header', $data);
		$this->load->view('transaksi/index', $data);
		$this->load->view('templates/footer');
	}

	public function add_to_cart($id)
	{ //fungsi Add To Cart
		$book = $this->MCart->find($id);

		$data = array(
			'id' => $book->ID_Buku,
			'name' => $book->Judul,
			'price' => '-',
			'qty' => 1,
		);
		$this->cart->insert($data);
		// echo $this->show_cart();
		redirect('transaksi'); //tampilkan cart setelah added
	}

	// public function show_cart()
	// { //Fungsi untuk menampilkan Cart
	// 	$output = '';
	// 	$no = 0;
	// 	foreach ($this->cart->contents() as $items) {
	// 		$no++;
	// 		$output .= '
	//             <tr>
	//                 <td>' . $items['name'] . '</td>
	//                 <td>' . number_format($items['price']) . '</td>
	//                 <td>' . $items['qty'] . '</td>
	//                 <td>' . number_format($items['subtotal']) . '</td>
	//                 <td><button type="button" id="' . $items['rowid'] . '" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
	//             </tr>
	//         ';
	// 	}
	// 	$output .= '
	//         <tr>
	//             <th colspan="3">Total</th>
	//             <th colspan="2">' . 'Rp ' . number_format($this->cart->total()) . '</th>
	//         </tr>
	//     ';
	// 	return $output;
	// }

	// public function load_cart()
	// { //load data cart
	// 	echo $this->show_cart();
	// }

	public function hapus_cart($rowid)
	{ //fungsi untuk menghapus item cart
		// $data = array(
		// 	'rowid' => $this->input->post('row_id'),
		// 	'qty' => 0,
		// );
		$this->cart->remove($rowid);
		redirect('transaksi');
	}
	public function submit()
	{
		$user = $this->input->post('Nama');
		$data1['id_transaksi'] = time();
		$data1['pembeli'] = $user;
		$this->MCart->submitpembelian($data1);

		foreach ($this->cart->contents() as $items) {
			$data2['id_transaksi'] = $data1['id_transaksi'];
			$data2['id_buku'] = $items['id'];
			$data2['tgl_pinjam'] = date("d-m-Y");
			$data2['tgl_kembali'] = date('d-m-Y', strtotime('+1 week', strtotime($data2['tgl_pinjam'])));
			$data2['qty'] = $items['qty'];
			$data2['stat'] = 'Meminjam';
			$this->MCart->submitdetailpembelian($data2);
			$data = [
				"status" => 'Dipinjam'
			];
			$this->db->set($data);
			$this->db->where('ID_Buku', $data2['id_buku']);
			$this->db->update('buku');
			// $data3 = array(
			// 	'rowid' => $items['rowid'],
			// 	'qty' => 0,
			// );
			$this->cart->destroy();
		}
		// $this->load->view('home/index');
		redirect('home');
	}

	public function lanjutan()
	{ //fungsi untuk lanjutan submit
		$data['judul'] = 'Input Data Peminjam';
		$data['member']=$this->MAnggota->getData();
		$this->load->view('templates/header', $data);
		$this->load->view('transaksi/lanjutan');
		$this->load->view('templates/footer');
	}

	public function kembali($ID)
	{ //fungsi untuk lanjutan submit
		foreach ($this->MCart->ambil_detail($ID) as $items) {
			$data2['id_buku'] = $items['id_buku'];
			$data1 = [
				"status" => 'Ada'
			];
			$this->db->set($data1);
			$this->db->where('ID_Buku', $data2['id_buku']);
			$this->db->update('buku');
		}
		$data = [
			"stat" => 'Sudah Kembali'
		];

		$this->db->set($data);
		$this->db->where('id_transaksi', $ID);
		$this->db->update('detail_transaksi');
		redirect('home');
	}
}
