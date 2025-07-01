<?php
/**
 * Struktur Organisasi - Hirarki Kartu Vertikal
 * SLiMS Custom Mandala Widya Loka
 */

$opac->page_title = 'Struktur Organisasi';

$main_content = '
<style>
.org-card {
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.08);
  overflow: hidden;
  transition: all 0.3s ease;
  border-top: 6px solid #4f46e5;
  width: 100%;
  max-width: 280px;
  margin: auto;
}
.org-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}
.org-card-header {
  background: linear-gradient(to right, #6366f1, #4f46e5);
  height: 60px;
}
.org-avatar {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-top: -40px;
  border: 4px solid white;
  object-fit: cover;
}
.org-tag {
  display: inline-block;
  background: #ede9fe;
  color: #7c3aed;
  font-size: 12px;
  font-weight: bold;
  padding: 3px 8px;
  border-radius: 9999px;
  margin-top: 5px;
}
.org-container {
  display: flex;
  flex-direction: column;
  gap: 32px;
  align-items: center;
}
.org-row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 24px;
}
</style>

<div class="container mt-5 mb-5">
  <h2 class="text-center mb-4" style="font-size: 28px; font-weight: bold;">Struktur Organisasi</h2>

  <div class="org-container">
    <!-- Kepala -->
    '.generateOrgCard("KEPALA", "Dr. I Wayan Suarta, S.Pd., M.Pd.", "BGTK Provinsi Bali", "#4f46e5").'

    <!-- Kasubag
    '.generateOrgCard("KASUBAG UMUM", "I Made Abdi Wismana, S.T.,M.T.", "Administrasi", "#059669").' -->

    <!-- Ketua -->
    '.generateOrgCard("KETUA PERPUSTAKAAN", "Ananda Jatiarum, A.Md.", "Pustaka", "#7c3aed").'

    <!-- Anggota -->
    <div class="org-row">
      '.generateOrgCard("ANGGOTA", "Ni Nyoman Sutriyawati", "Staf", "#ec4899").'
      '.generateOrgCard("ANGGOTA", "Ni Nyoman Setiarini", "Staf", "#ec4899").'
      '.generateOrgCard("ANGGOTA", "I Wayan Agus Adi Saputra, S.Kom", "Staf", "#ec4899").'
      '.generateOrgCard("ANGGOTA", "I Gede Pasek Arsana", "Staf", "#ec4899").'
      '.generateOrgCard("ANGGOTA", "I Putu Heri Mahendra", "Staf", "#ec4899").'
    </div>
  </div>
</div>
';

function generateOrgCard($role, $name, $division, $colorHex) {
  return '
  <div class="org-card text-center bg-white">
    <div class="org-card-header" style="background: '.$colorHex.';"></div>
    <img src="'.SWB.'images/persons/person.png" class="org-avatar mx-auto" alt="'.$name.'">
    <div class="p-3">
      <div class="org-tag"></i>'.$role.'</div>
      <h5 style="margin: 10px 0 4px; font-weight: bold;">'.$name.'</h5>
      <p style="margin: 0; font-size: 14px;">'.$division.'</p>
      <p style="margin: 0; font-size: 13px; color: #555;"><i class="fa fa-envelope"></i> - </p>
      <p style="margin: 0; font-size: 13px; color: #555;"><i class="fa fa-phone"></i> - </p>
    </div>
  </div>';
}

echo $main_content;
