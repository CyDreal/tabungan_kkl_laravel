<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="px-4 md:px-8 lg:px-12">
            {{-- total tabungan section --}}
            <div class="grid auto-rows-min gap-4 md:grid-cols-3 lg:grid-cols-4">
                <x-card-information-bg class="relative aspect-video overflow-hidden rounded-xl">
                    <div class="flex flex-col h-full p-4">
                        <x-title>Total Tabungan</x-title>
                        <div class="flex-1 flex items-start">
                            <div class="text-2xl font-bold" style="color: var(--primary);">
                                Rp 0
                            </div>
                        </div>
                    </div>
                </x-card-information-bg>
                <x-card-information-bg class="relative aspect-video overflow-hidden rounded-xl">
                    <div class="flex flex-col h-full p-4">
                        <x-title>Total Tabungan Angkatan</x-title>
                        <div class="flex-1 flex items-start">
                            <div class="text-2xl font-bold" style="color: var(--primary);">
                                Rp 0
                            </div>
                        </div>
                        <div class="text-xs flex-1 flex item-start" style="color: var(--muted-foreground);">
                            dari 0 mahasiswa
                        </div>
                    </div>
                </x-card-information-bg>
                <x-card-information-bg class="relative aspect-video overflow-hidden rounded-xl">
                    <div class="flex flex-col h-full p-4">
                        <x-title>Total Pengeluaran</x-title>
                        <div class="flex-1 flex items-start">
                            <div class="text-2xl font-bold" style="color: var(--destructive);">
                                Rp 0
                            </div>
                        </div>
                        <div class="text-xs flex-1 flex item-start" style="color: var(--muted-foreground);">
                            Total pengeluaran yang dikeluarkan dan sudah disetujui panitia yang lain
                        </div>
                    </div>
                </x-card-information-bg>
                <x-card-information-bg class="relative aspect-video overflow-hidden rounded-xl">
                    <div class="flex flex-col h-full p-4">
                        <x-title>Saldo Saat Ini</x-title>
                        <div class="flex-1 flex items-start">
                            <div class="text-2xl font-bold" style="color: var(--chart-1);">
                                Rp 0
                            </div>
                        </div>
                        <div class="text-xs flex-1 flex items-start" style="color: var(--muted-foreground);">
                            Saldo yang saat ini ada di rekening panitia
                        </div>
                    </div>
                </x-card-information-bg>
            </div>
            {{-- end total tabungan section --}}
            {{-- progress target section --}}
            <div class="grid auto-rows-min gap-4 mt-4 md:grid-cols-1 lg:grid-cols-2">
                <x-card-main class="h-auto w-full flex flex-col justify-between">
                    <div>
                        <x-title>Progress Target</x-title>
                        <div class="flex items-end gap-2 mb-2">
                            <div class="text-xl font-bold" style="color: var(--primary);">
                                Rp 0
                            </div>
                            <span class="text-base text-[var(--muted-foreground)]">/</span>
                            <div class="text-base font-semibold" style="color: var(--muted-foreground);">
                                Rp 1.950.000
                            </div>
                        </div>
                        <div class="w-full bg-[var(--muted)] rounded-full h-2 mb-2 overflow-hidden">
                            <div class="bg-[var(--primary)] h-2 rounded-full" style="width: 0%;"></div>
                        </div>
                        <div class="text-xs" style="color: var(--muted-foreground);">
                            0.0% tercapai
                        </div>
                    </div>
                </x-card-main>
                <x-card-main class="h-auto w-full flex flex-col justify-between">
                    <div>
                        <x-title>Progress Target</x-title>
                        <div class="flex items-end gap-2 mb-2">
                            <div class="text-xl font-bold" style="color: var(--primary);">
                                Rp 0
                            </div>
                            <span class="text-base text-[var(--muted-foreground)]">/</span>
                            <div class="text-base font-semibold" style="color: var(--muted-foreground);">
                                Rp 1.950.000
                            </div>
                        </div>
                        <div class="w-full bg-[var(--muted)] rounded-full h-2 mb-2 overflow-hidden">
                            <div class="bg-[var(--primary)] h-2 rounded-full" style="width: 0%;"></div>
                        </div>
                        <div class="text-xs" style="color: var(--muted-foreground);">
                            0.0% tercapai
                        </div>
                    </div>
                </x-card-main>
            </div>
            {{-- end progress target section --}}
            {{-- form menabung section --}}
            <x-card-main class="h-auto w-full flex flex-col justify-between mt-4">
                <form>
                    <x-title>Form Menabung</x-title>
                    <div class="mb-4">
                        <label class="block text-xs font-semibold mb-1" style="color: var(--muted-foreground);">
                            Jumlah Menabung
                        </label>
                            <x-input type="number" placeholder="Masukkan jumlah" />
                    </div>
                    <div class="mb-4">
                        <label class="block text-xs font-semibold mb-1" style="color: var(--muted-foreground);">
                            Metode Pembayaran
                        </label>
                        <select
                            class="w-full rounded-lg border px-3 py-2 bg-[var(--card)] text-[var(--foreground)] focus:outline-none border-[var(--border)] focus:ring-1 focus:ring-[var(--primary)] shadow-sm">
                            <option value="">Pilih metode</option>
                            <option value="cash">Cash</option>
                            <option value="transfer">Transfer</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-xs font-semibold mb-1" style="color: var(--muted-foreground);">
                            Catatan (Opsional)
                        </label>
                        <x-input type="text" placeholder="Catatan tambahan" />
                    </div>
                    <button type="submit" class="w-28 py-2 rounded-lg font-semibold bg-[var(--primary)] text-[var(--primary-foreground)] hover:bg-[var(--primary)]/90 transition">
                        Menabung
                    </button>
                </form>
            </x-card-main>
            {{-- end form menabung section --}}
            {{-- riwayat setoran section --}}
            <x-card-main class="w-full mt-4">
                <x-title>Riwayat Setoran</x-title>
                <div class="overflow-x-auto">
                    <x-table>
                        <x-table-thead>
                            <tr>
                                <x-table-th>Setoran Ke</x-table-th>
                                <x-table-th>Tanggal</x-table-th>
                                <x-table-th>Jumlah</x-table-th>
                                <x-table-th>Status</x-table-th>
                                <x-table-th>Metode</x-table-th>
                                <x-table-th>Aksi</x-table-th>
                            </tr>
                        </x-table-thead>
                        <tbody>
                            <tr class="border-t border-[var(--border)]">
                                <td class="px-4 py-2">1</td>
                                <td class="px-4 py-2">2025-08-04</td>
                                <td class="px-4 py-2">Rp 100.000</td>
                                <td class="px-4 py-2">
                                    <span class="px-2 py-1 rounded bg-[var(--muted)] text-xs">Menunggu</span>
                                </td>
                                <td class="px-4 py-2">Transfer</td>
                                <td class="px-4 py-2">
                                    <button class="px-3 py-1 rounded bg-[var(--primary)] text-[var(--primary-foreground)] text-xs font-semibold hover:bg-[var(--primary)]/90 transition">Detail</button>
                                </td>
                            </tr>
                            <tr class="border-t border-[var(--border)]">
                                <td class="px-4 py-2">2</td>
                                <td class="px-4 py-2">2025-08-05</td>
                                <td class="px-4 py-2">Rp 200.000</td>
                                <td class="px-4 py-2">
                                    <span class="px-2 py-1 rounded bg-[var(--primary)] text-xs">Disetujui</span>
                                </td>
                                <td class="px-4 py-2">Cash</td>
                                <td class="px-4 py-2">
                                    <button class="px-3 py-1 rounded bg-[var(--primary)] text-[var(--primary-foreground)] text-xs font-semibold hover:bg-[var(--primary)]/90 transition">Detail</button>
                                </td>
                            </tr>
                        </tbody>
                    </x-table>
                </div>
            </x-card-main>
            {{-- end riwayat setoran section --}}
        </div>
    </div>
</x-layouts.app>
