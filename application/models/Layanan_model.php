<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layanan_model extends CI_Model
{
  public $table = 'layanan';
  public $id    = 'id_layanan';
  public $order = 'DESC';

	function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

  function get_all()
  {
    $this->db->order_by('nama_layanan','ASC');
    return $this->db->get($this->table)->result();
  }

  function get_all_home()
  {
    $this->db->order_by('nama_layanan', 'ASC');
    return $this->db->get($this->table)->result();
  }

  function ambil_layanan()
  {
    $this->db->order_by('nama_layanan', 'ASC');
  	$data=$this->db->get('layanan');
  	if($data->num_rows()>0)
    {
  		foreach ($data->result_array() as $row)
			{
				$result['']= '- Pilih Layanan -';
				$result[$row['id_layanan']]= ucwords(strtolower($row['nama_layanan']));
			}
			return $result;
		}
	}

  function ambil_subkat($kat)
  {
    $this->db->where('id_kat',$kat);
  	// $this->db->order_by('judul_subkat','asc');
  	$sql_subkat=$this->db->get('sublayanan');
  	if($sql_subkat->num_rows()>0)
    {
  		foreach ($sql_subkat->result_array() as $row)
      {
        $result[$row['id_sublayanan']]= ucwords(strtolower($row['judul_sublayanan']));
      }
      return $result;
    }
    // else
    // {
		//   $result['-']= '- Belum Ada Sub Layanan -';
		// }
    // return $result;
	}

  function ambil_sublayanan($kat_id)
  {
  	$this->db->where('id_kat',$kat_id);
  	$this->db->order_by('judul_sublayanan','asc');
  	$sql=$this->db->get('sublayanan');
  	if($sql->num_rows()>0)
    {
  		foreach ($sql->result_array() as $row)
      {
        $result[$row['id_sublayanan']]= ucwords(strtolower($row['judul_sublayanan']));
      }
    }
    else
    {
		  $result['-']= '- Belum Ada SubLayanan -';
		}
    return $result;
	}

  function ambil_supersubkat($subkat_id)
  {
  	$this->db->where('id_subkat',$subkat_id);

  	$sql=$this->db->get('supersublayanan');
  	if($sql->num_rows()>0)
    {
  		foreach ($sql->result_array() as $row)
      {
        $result[$row['id_supersublayanan']]= ucwords(strtolower($row['judul_supersublayanan']));
      }
    }
    else
    {
		  $result['-']= '- Belum Ada SuperSubLayanan -';
		}
    return $result;
	}

  function ambil_supersublayanan($subkat_id)
  {
  	$this->db->where('id_subkat',$subkat_id);

  	$sql=$this->db->get('supersublayanan');
  	if($sql->num_rows()>0)
    {
  		foreach ($sql->result_array() as $row)
      {
        $result[$row['id_supersublayanan']]= ucwords(strtolower($row['judul_supersublayanan']));
      }
    }
    else
    {
		  $result['-']= '- Belum Ada SuperSubLayanan -';
		}
    return $result;
	}

  function get_list_by_layanan($slug, $limit=null, $offset=null)
  {
    $this->db->join('layanan', 'produk.kat_id=layanan.id_layanan');
    $this->db->where('layanan.slug_kat', $slug);
    $this->db->limit($limit, $offset);

    return $this->db->get('produk');
  }

  function get_by_layanan_nr($slug)
  {
    $this->db->join('layanan', 'produk.kat_id=layanan.id_layanan');
    $this->db->where('layanan.slug_kat', $slug);

    return $this->db->get('produk')->num_rows();
  }

  function get_list_by_sublayanan($slug, $limit=null, $offset=null)
  {
    $this->db->join('sublayanan', 'produk.subkat_id=sublayanan.id_sublayanan');
    $this->db->where('sublayanan.slug_subkat', $slug);
    $this->db->limit($limit, $offset);

    return $this->db->get('produk');
  }

  function get_by_sublayanan_nr($slug)
  {
    $this->db->join('sublayanan', 'produk.subkat_id=sublayanan.id_sublayanan');
    $this->db->where('sublayanan.slug_subkat', $slug);

    return $this->db->get('produk')->num_rows();
  }

  function get_list_by_superslayanan($slug, $limit=null, $offset=null)
  {
    $this->db->join('supersublayanan', 'produk.supersubkat_id=supersublayanan.id_supersublayanan');
    $this->db->where('supersublayanan.slug_supersubkat', $slug);
    $this->db->limit($limit, $offset);

    return $this->db->get('produk');
  }

  function get_by_superslayanan_nr($slug)
  {
    $this->db->join('supersublayanan', 'produk.supersubkat_id=supersublayanan.id_supersublayanan');
    $this->db->where('supersublayanan.slug_supersubkat', $slug);

    return $this->db->get('produk')->num_rows();
  }

  function get_all_new_home()
  {
    $this->db->limit(4);
    $this->db->order_by($this->id, $this->order);
    return $this->db->get($this->table)->result();
  }

  function get_all_layanan_sidebar()
  {
    $this->db->order_by('judul_layanan', 'asc');
    return $this->db->get($this->table)->result();
  }

  function get_total_row_layanan()
  {
    return $this->db->get($this->table)->count_all_results();
  }

  function get_by_id($id)
  {
    $this->db->where($this->id, $id);
    return $this->db->get($this->table)->row();
  }

  function get_by_id_front($id)
  {
    $this->db->from('produk');
    $this->db->where('slug_subkat', $id);
    $this->db->join('sublayanan', 'produk.subkat_id = sublayanan.id_sublayanan');
    $this->db->order_by('id_produk','desc');
    return $this->db->get();
  }

  // get total rows
  function total_rows()
  {
    return $this->db->get($this->table)->num_rows();
  }

  function insert($data)
  {
    $this->db->insert($this->table, $data);
  }

  function update($id, $data)
  {
    $this->db->where($this->id,$id);
    $this->db->update($this->table, $data);
  }

  function delete($id)
  {
    $this->db->where($this->id, $id);
    $this->db->delete($this->table);
  }

  function del_by_id($id)
  {
    $this->db->select("foto");
    $this->db->where($this->id,$id);
    return $this->db->get($this->table)->row();
  }

}
